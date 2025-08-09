<?php

namespace App\Http\Controllers\Auth\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(Request $request){
        $validation = $request->validate([
            'name' => 'required|string|min:3',
            'phone_number' => ['required', 'regex:/^(03\d{9}|3\d{9})$/'],
            'email' => 'email|unique:users,email',
            'password' => 'required|min:8',
            'city' => 'required|string'
        ]);

        try {
            // Store user's data in db:
            $user = User::create([
                'name' => $validation['name'],
                'phone_number' => $validation['phone_number'],
                'email' => $validation['email'],
                'password' => $validation['password'],
                'city' => $validation['city'],
                'role' => 'user'
            ]);

            if(!$user){
                throw new \Exception('Failed to create account due to internal server error. Please try again');
            }

            return redirect('/')->with('account_created', 'Your account has been created succesfully!');

        } catch (\Throwable $e) {
            return redirect()->back()->with('error', $e->getMessage())->withInput();
        }
    }
}
