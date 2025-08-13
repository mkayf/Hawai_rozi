<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/about', function () {
    return view('pages.about');
});


Route::view('/register-user', 'pages.user.register_user');

Route::view('/login-user', 'pages.user.login_user');

