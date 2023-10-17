<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SigninController extends Controller
{
    public function signin()
    {
        return view ('pages.auth.signin');

    }
    public function authenticate(Request $request)
    {
        $attributes = $request->validate([
            'email' => ['required','email'],
            'password' => ['required'],
        ]);

         if (Auth::attempt($attributes))
         {
            return redirect(url('dashboard'))->with('success', 'You are Sign In now.');
         };

         throw ValidationException::withMessages([
            'email' => 'Your provide credentials does not match our records.',
         ]);

    }
}
