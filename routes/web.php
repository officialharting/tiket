<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\VerifyController;
use App\Http\Controllers\SignoutController;
use App\Http\Controllers\ForgotPasswordController;

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
Route::get('/', function () { return view('pages.client.home'); });


// Khusus Tamu bisa akses
Route::middleware('guest')->group(function ()
    {
        // Sign In
        Route::get('signin', [SigninController::class,'signin'])->name('signin');
        Route::post('signin', [SigninController::class,'authenticate']);

        // Sign Up
        Route::get('signup', [SignupController::class,'create'])->name('signup');
        Route::post('signup', [SignupController::class,'store']);

        // Forgot Password
        Route::get('forgot-password', [ForgotPasswordController::class, 'password_request'])->name('password.request');
        Route::post('forgot-password', [ForgotPasswordController::class, 'password_email'])->name('password.email');
        Route::get('reset-password/{token}', [ForgotPasswordController::class, 'password_reset'])->name('password.reset');
        Route::post('reset-password', [ForgotPasswordController::class, 'password_reset_store'])->name('password.update');
    });

// Verifikasi Email
Route::middleware(['auth','role:admin|user'])->group(function ()
    {
        // Notif Verifikasi by Email
        Route::get('email/verify', [VerifyController::class,'notice'])->name('verification.notice');
        // Link Verifikasi by Email di kirim ke email yang terdaftar
        Route::get('email/verify/{id}/{hash}', [VerifyController::class,'unverified'])->name('verification.verify');
        // Link Kirim Ulang verifikasi email
        Route::post('email/verification-notification', [VerifyController::class,'send_back'])->middleware('throttle:6,1')->name('verification.send');
    });

// Dashboard Admin
Route::middleware(['auth','verified','role:admin|user'])->group(function ()
    {
        // Dashboard
        Route::get('dashboard', [AdminController::class,'dashboard']);
        // Event
        Route::resource('event', EventController::class);
        // Customer
        Route::get('customer', [AdminController::class,'customer']);
        // Admin
        Route::get('admin', [AdminController::class,'admin']);
    });

// Logout
Route::post('logout',[SignoutController::class, 'logout'])->middleware('auth')->name('logout');

