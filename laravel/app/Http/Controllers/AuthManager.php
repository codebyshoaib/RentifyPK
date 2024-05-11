<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthManager extends Controller
{
    function login(){
        return view('login');
    }

    function registeration(){
        return view('registeration');
    }

    function loginPost(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials)){
            return redirect()->intended(route('loginSuccess'));
        } else {
            return redirect(route('login'))->with("error", "Login details are invalid");
        }
    }

    function registerationPost(Request $request){
        try {
            $request->validate([
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'Password' => 'required'
            ]);
    
            $data['name'] = $request->name;
            $data['email'] = $request->email;
            $data['password'] = Hash::make($request->Password);
    
            $user = User::create($data);
    
            \Log::info('User created:', $user->toArray()); // Convert User instance to array
    
            return redirect(route('signupSuccess'))->with("success", "User added");
        } catch (\Exception $e) {
            \Log::error('Error during registration:', ['exception' => $e]);
    
            return redirect(route('registeration'))->with("error", "An error occurred during registration.");
        }
    }
    
    
    function logout(){
        Auth::logout();
        return redirect(route('login'));
    }
}
