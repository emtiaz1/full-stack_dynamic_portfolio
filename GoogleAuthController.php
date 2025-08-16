<?php

namespace App\Http\Controllers;

use Laravel\Socialite\Facades\Socialite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class GoogleAuthController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->stateless()->user();
            $allowedEmails = ['emtiaz837@gmail.com', 'rafid15-5151@diu.edu.bd'];

            if (in_array($user->email, $allowedEmails)) {
                // Store user data in Laravel session
                session([
                    'admin_logged_in' => true,
                    'admin_email' => $user->email,
                    'admin_name' => $user->name
                ]);

                return redirect()->route('admin.home')->with('success', 'Successfully logged in!');
            }

            return redirect()->route('login')
                ->with('error', 'Unauthorized email. Please use an authorized email address.');
        } catch (\Exception $e) {
            return redirect()->route('login')
                ->with('error', 'Something went wrong! Please try again.');
        }
    }

    public function logout()
    {
        session()->forget(['admin_logged_in', 'admin_email', 'admin_name']);
        return redirect()->route('admin.login')->with('success', 'Successfully logged out!');
    }
}