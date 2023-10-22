<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
        public function lupa()
        {
            return view ('pages.auth.forgot-password');
        }
        // Halaman Dashboard
        public function dashboard()
        {
            return view ('pages.admin.dashboard');
        }
        // Halaman Customer
        public function customer()
        {
            return view ('pages.admin.customer');
        }
        // Halaman User
        public function admin()
        {
            return view ('pages.admin.admin');
        }
}
