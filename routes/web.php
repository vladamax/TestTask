<?php

use App\Http\Controllers\OtpController;
use App\Http\Controllers\SessionsController;
use Illuminate\Support\Facades\Route;


Route::get('/' , [SessionsController::class , 'create']);//->middleware('guest');
Route::post('/login' , [SessionsController::class , 'store']);//->middleware('guest');

Route::get('/otp' , [OtpController::class , 'create']);//->middleware('guest');
Route::post('/loginOtp' , [OtpController::class , 'store']);//->middleware('guest');
