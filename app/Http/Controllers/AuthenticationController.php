<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthenticationController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('admin.home')->with('success', 'Login Successful!');
        } else {
            return back()->with('error', 'Login Failed! Please check your credentials.');
        }
    }

    public function regi(Request $request)
    {
        $request->validate([
            'user_name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);

        try {
            Users::create([
                'user_name' => $request->user_name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
            ]);
            return redirect()->route('login')->with('success', 'Registration Successful!');
        } catch (\Exception $e) {
            return back()->with('error', 'Registration Failed! ' . $e->getMessage());
        }
    }
}

