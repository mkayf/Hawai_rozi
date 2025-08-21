<?php

use App\Http\Controllers\Auth\User\AuthController;
use App\Http\Controllers\ServicesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::view('/about', 'pages.about');

// User auth:

Route::middleware('guest')->group(function(){
    Route::view('/user/register', 'pages.user.register_user')->name('user_register_form');
    
    Route::view('/user/login', 'pages.user.login_user')->name('user_login_form');
    
    Route::post('/user/register', [AuthController::class, 'register'])->name('register_user');
    
    Route::post('/user/login', [AuthController::class, 'login'])->name('login_user');
});

Route::middleware('auth')->group(function(){
    Route::post('/logout-user', [AuthController::class, 'logout'])->name('logout_user');
    Route::get('/user/profile', [AuthController::class, 'userProfile'])->name('user_profile');
    Route::get('/services', [ServicesController::class, 'services_page'])->name('services_page');
});
