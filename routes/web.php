<?php

use App\Http\Controllers\Auth\User\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

<<<<<<< HEAD
Route::get('/about', function () {
    return view('pages.about');
});

=======
// User auth:
>>>>>>> 837d08838e161f6eab006e1e1e24f13a80aaa1b0

Route::view('/register-user', 'pages.user.register_user');

Route::view('/login-user', 'pages.user.login_user');

Route::post('/register', [AuthController::class, 'register']);
