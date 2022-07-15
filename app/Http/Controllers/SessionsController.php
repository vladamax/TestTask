<?php

namespace App\Http\Controllers;

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

        if(auth()->once($attributes))
        {
            if(auth()->user()->otpEnabled)
            {
                return redirect('/otp')->with('attributes', $attributes);
            }
            auth()->attempt($attributes);
            return redirect('/');
        }
        return back()->withInput()->with('logInMessage' , 'LogIn failed');
    }
}
