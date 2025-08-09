<?php

namespace App\Http\Controllers\Auth\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;

class AuthController extends Controller
{
    public function register(Request $request){
        $validation = Validator($request->all(), [
            'name' => 'required|string|min:3',
            'phone_number' => 'required|numeric|regex:!/^(03\d{9}|3\d{9})$/',
            'email' => 'email|unique:users, email'
        ]);

        if($validation->fails()){
            
        }
    }
}
