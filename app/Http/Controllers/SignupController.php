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

        User::Create($request->all());

       return redirect(url('dashboard'))->with('success','Thank you, you are now registered.');
    }
}
