<?php

namespace App\Http\Controllers;

use App\Http\Requests\SignupRequest;
use App\Models\User;

class SignupController extends Controller
{
    public function create(){
        return view ('pages.auth.signup');
    }
    public function store(SignupRequest $request){
        $user = User::Create($request->all());
        $user->assignRole('user');
       return redirect(url('dashboard'))->with('success','Thank you, you are now registered.');
    }
}
