<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    function showRegister(){
        return view('authentication.register');
    }
    function showLogin(){
        return view('authentication.login');
    }
    function register(Request $request){
        $request->validate([
            'name'       => 'required|string|max:255',
            'email'      => 'required|email|unique:users',
            'password'   => 'required|min:6|confirmed'
        ]);

        User::create([
            'name'       => $request->name,
            'email'      => $request->email,
            'password'   => Hash::make($request->password)
        ]);

        return redirect()->route('login')->with('success','Registration successful');
    }
    function performLogin(Request $request){

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');

    }
    function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('home');
    }

}
