<?php

namespace App\Http\Controllers\Auth\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validation = $request->validate([
            'name' => 'required|string|min:3',
            'phone_number' => ['required', 'regex:/^(03\d{9}|3\d{9})$/'],
            'email' => 'email|unique:users,email',
            'password' => 'required|min:8',
            'city' => 'required|string'
        ]);

        // Store user's data in db:
        $user = User::create([
            'name' => $validation['name'],
            'phone_number' => $validation['phone_number'],
            'email' => $validation['email'],
            'password' => $validation['password'],
            'city' => $validation['city'],
            'role' => 'user'
        ]);

        if (!$user) {
            return redirect()->back()->withErrors([
                "account_creation_failed" => "We couldn't create your account, please try again"
            ])->withInput();
        }

        Auth::login($user);

        return redirect()->route('home')->with('account_created', 'Your account has been created succesfully!');
    }

    public function login(Request $request){

        $emailOrPhoneValidation = new \App\Rules\EmailOrPhoneValidation();

        $validation = $request->validate([
            'email_or_phone' => ['required', $emailOrPhoneValidation],
            'password' => ['required', 'min:8'],
            'remember_user' => ['sometimes']
        ]);

        // Now this can be email or phone number
        $loginField = $emailOrPhoneValidation->type;

        if(isset($validation['remember_user'])){
            $remember = true;
        } else{
            $remember = false;
        }

        if(Auth::attempt([$loginField => $validation['email_or_phone'], 'password' => $validation['password']], $remember)){
            return redirect()->route('home')->with('login_success', 'You are logged in.');
        } else{
            return redirect()->back()->withErrors(["login_failed" => "Your credentials are invalid"])->withInput();
        }

    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('home')->with('logged_out', 'You have been logged out');
    }

    public function userProfile(){
        return view('pages.user.user_profile');
    }
}
