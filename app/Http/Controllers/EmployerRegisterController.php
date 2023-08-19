<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\User;
use Hash;
use Illuminate\Http\Request;

class EmployerRegisterController extends Controller
{
    public function employerRegIndex()
    {

        return view('auth.employer-register');
    }

    public function employerRegister(Request $request)
    {


        $this->validate($request, [
            'cname' => 'required|string|max:60',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed'
        ]);

        $user =  User::create([
            'email' => request('email'),
            'password' => Hash::make(request('password')),
            'role' => request('role'),
        ]);
        Company::create([
            'user_id' => $user->id,
            'cname' => request('cname'),
            'slug' => str_slug(request('cname'))

        ]);
        // $user->sendEmailVerificationNotification();

        return redirect()->to('/login')->with('message', 'A verification link is sent to your email. Please follow the link to verify it');
    }
}