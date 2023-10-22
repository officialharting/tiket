<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

class VerifyController extends Controller
{
    public function notice()
    {
        return view("pages.auth.verify");
    }
    public function unverified(EmailVerificationRequest $request){
        $request->fulfill();

        return redirect(url('dashboard'))->with('Success','You are all set! Your registration has been successfully confirmed.');
    }
    public function send_back(Request $request){
        $request->user()->sendEmailVerificationNotification();

        return back()->with('message', 'A fresh verification link has been sent to your email address!');
    }

}
