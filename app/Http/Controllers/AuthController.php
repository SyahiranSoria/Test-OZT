<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{

    public function show(){
        return view('login');
    }

    public function login(Request $request){
        
        $validated = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if (!Auth::attempt($request->only(['email', 'password']))) {
            throw ValidationException::withMessages(['email' => 'Invalid credentials']);
        }

        return redirect('/dashboard');
    }

    public function logout(Request $request)
    {
        Auth::logout(); // Logout 
        return redirect('/'); // Redirect to the login
    }


}
