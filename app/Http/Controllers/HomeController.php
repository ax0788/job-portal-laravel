<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Company;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $jobs = Job::latest()->limit(10)->where('status', 1)->get();
        $companies = Company::orderBy('id', 'desc')->limit(10)->get();
        return view('user.home', compact('jobs', 'companies'));

    }
    public function savedJobs()
    {
        $jobs = Auth::user()->favourites;
        return view('jobs.saved', compact('jobs'));
    }


}