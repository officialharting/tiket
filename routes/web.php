<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Beranda
Route::get('/', function () {
    return view('pages.client.home');
});

// Sign In
Route::get('signin', [AdminController::class,'signin']);

// Sign Up
Route::get('signup', [AdminController::class,'signup']);

// Dashboard
Route::get('dashboard', [AdminController::class,'dashboard']);

// Customer
Route::get('customer', [AdminController::class,'customer']);
// Event
Route::get('event', [AdminController::class,'event']);
// Admin
Route::get('user', [AdminController::class,'user']);

