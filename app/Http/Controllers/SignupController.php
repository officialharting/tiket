<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\SignupRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;

class SignupController extends Controller
{
    public function create(){
        return view ('pages.auth.signup');
    }
    public function store(SignupRequest $request){
        $user = User::Create($request->all());
        $user->assignRole('user');
        event(new Registered($user));
        Auth::login($user);
       return redirect(url('/email/verify'));
    }
}
