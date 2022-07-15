<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OtpController extends Controller
{
    public function create()
    {
        return view('otp.create');
    }

    public function store()
    {
        request()->validate([
           'otp' => 'required'
        ]);

        $attributes = ['email' => request('email') , 'password' => request('password')];
        if(request('otp') == 111111)
        {
            auth()->attempt($attributes);
            return redirect('/');
        }
        return back()->withInput()->with('attributes',$attributes)->withErrors(['otp' => 'OTP not correct']);
    }

}
