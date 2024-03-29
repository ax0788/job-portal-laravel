<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Job;
use App\Models\Category;
use App\Http\Requests\JobPostRequest;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class JobController extends Controller
{
    public function __construct()
    {
        $this->middleware(['employer', 'verified'], ['except' => array('index', 'show', 'apply', 'Joblist', 'savedJobs', 'searchJobs')]);
    }

    public function index()
    {
        // $jobs = Job::latest()->limit(10)->where('status', 1)->get();
        // $companies = Company::limit(10)->get();
        // return view('user.home', compact('jobs', 'companies'));
    }

    public function show($id, Job $job)
    {
        return view('jobs.show', compact('job'));
    }


    public function company()
    {
        return view('company.index');
    }

    public function currentJob()
    {
        $jobs = Job::where('user_id', auth()->user()->id)->get();
        return view('jobs.current', compact('jobs'));
    }

    public function edit($id)
    {
        $job = Job::findOrFail($id);
        return view('jobs.edit', compact('job'));
    }

    public function update(JobPostRequest $request, $id)
    {
        $job = Job::findOrFail($id);
        $job->update($request->all());
        return redirect()->back()->with('message', 'Job  Sucessfully Updated!');
    }
    public function applicant()
    {
        $applicants = Job::has('users')->where('user_id', auth()->user()->id)->get();
        return view('jobs.applicants', compact('applicants'));
    }


    public function  create()
    {
        return view('jobs.create');
    }
    public function  store(JobPostRequest $request)
    {

        $user_id = auth()->user()->id;
        $company = Company::where('user_id', $user_id)->first();
        $company_id = $company->id;
        $Date = date('Y-m-d', strtotime($request->last_date));
        Job::create([
            'user_id' => $user_id,
            'company_id' => $company_id,
            'title' => request('title'),
            'slug' => str_slug(request('title')),
            'description' => request('description'),
            'roles' => request('roles'),
            'category_id' => request('category'),
            'position' => request('position'),
            'address' => request('address'),
            'type' => request('type'),
            'status' => request('status'),
            'last_date' => $Date


        ]);
        return redirect()->back()->with('message', 'Job posted successfully!');
    }

    public function apply($id)
    {
        $jobId = Job::find($id);
        $jobId->users()->attach(Auth::user()->id);
        return redirect()->back()->with('message', 'Application sent!');
    }

    public function Joblist(Request $request)
    {
        // $companies = Company::orderBy('id', 'desc')->get();
        $keyword = $request->get('title');
        $type = $request->get('type');
        $category = $request->get('category_id');
        $address = $request->get('address');
        if ($keyword || $type || $category || $address) {
            $jobs = Job::where('title', 'LIKE', '%' . $keyword . '%')
                ->orWhere('type', $type)
                ->orWhere('category_id', $category)
                ->orWhere('address', $address)
                ->paginate(10);
            return view('jobs.list', compact('jobs'));
        } else {

            $jobs = Job::latest()->paginate(10);
            return view('jobs.list', compact('jobs'));
        }
    }

    public function searchJobs(Request $request)
    {

        $keyword = $request->get('keyword');
        $users = Job::where('title', 'like', '%' . $keyword . '%')
            ->orWhere('position', 'like', '%' . $keyword . '%')
            ->limit(5)->get();
        return response()->json($users);
    }

}