<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {
        $attributes = request()->validate([
           'email' => 'required|email',
           'password' => 'required'
        ]);

        if(auth()->attempt($attributes))
        {
            return redirect('/otp');
        }

        return back()->withInput()->with('logInMessage' , 'LogIn failed');
    }
}
