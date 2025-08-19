<?php

use App\Http\Controllers\Auth\User\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

// User auth:

Route::view('/register-user', 'pages.user.register_user')->name('register_user_form');

Route::view('/login-user', 'pages.user.login_user')->name('login_user_form');

Route::post('/register', [AuthController::class, 'register'])->name('register_user');
