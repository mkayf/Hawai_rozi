<?php

use App\Http\Controllers\Auth\User\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::view('/about', 'pages.about');
Route::view('/services', 'pages.services');


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
});


// worker auth 

Route::middleware('guest')->group(function(){
    Route::view('/woker/register', 'pages.worker.register_worker')->name('worker_register_form');
    
    Route::view('/worker/login', 'pages.worker.login_worker')->name('worker_login_form');
    
    Route::post('/worker/register', [AuthController::class, 'register'])->name('register_worker');
    
    Route::post('/worker/login', [AuthController::class, 'login'])->name('login_worker');
});