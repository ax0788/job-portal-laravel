<?php

namespace App\Http\Responses;

use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;
use Illuminate\Support\Facades\Auth;

class LoginResponse implements LoginResponseContract
{
    /**
     * Create an HTTP response that represents the object.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function toResponse($request)
    {
        // $home = auth()->user()->role == 'admin' ? 'admin/dashboard' : '/';


        if (Auth::user()->role == 'seeker') {
            return redirect()->route('home');
        } elseif (Auth::user()->role == 'employer') {
            return redirect()->route('company.create');
        }
    }
}