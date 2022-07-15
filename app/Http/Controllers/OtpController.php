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

        if(request('otp') == 111111)
        {
            return view('home');
        }
        return back()->withInput()->withErrors(['otp' => 'OTP not correct']);
    }
}
