<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

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
        // Halaman event
        public function event()
        {
            return view ('pages.admin.event');
        }
        // Halaman User
        public function admin()
        {
            return view ('pages.admin.admin');
        }
}
