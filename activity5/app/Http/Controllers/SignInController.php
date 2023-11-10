<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class SignInController extends Controller
{

    public function showLoginForm (){
        return view("Auth.login");
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed
            return redirect()->intended('dashboard')
                ->with('success', 'Login successful'); // Flash a success message
        }

        // Authentication failed
        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/')
            ->with('success', 'Logout successful'); // Flash a success message
    }
}
