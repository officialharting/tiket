<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
        //Halaman SignIn
        public function signin()
        {
            return view ('pages.admin.signin');
        }
        //Halaman SignUp
        public function signup()
        {
            return view ('pages.admin.signup');
        }
        // Halaman Dashboard
        public function dashboard()
        {
            return view ('pages.admin.dashboard');
        }
}
