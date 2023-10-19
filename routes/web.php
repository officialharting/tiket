<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\SignoutController;

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

Route::middleware('guest')->group(function ()
    {
        // Sign In
        Route::get('signin', [SigninController::class,'signin'])->name('signin');
        Route::post('signin', [SigninController::class,'authenticate']);

        // Sign Up
        Route::get('signup', [SignupController::class,'create'])->name('signup');
        Route::post('signup', [SignupController::class,'store']);

    });

    Route::middleware(['auth','role:admin|user'])->group(function ()
    {
        // Dashboard
        Route::get('dashboard', [AdminController::class,'dashboard']);
        // Customer
        Route::get('customer', [AdminController::class,'customer']);
        // Event
        Route::get('event', [AdminController::class,'event']);
        // Admin
        Route::get('admin', [AdminController::class,'admin']);

    });

    // Logout
    Route::post('logout',[SignoutController::class, 'logout'])->name('logout');
