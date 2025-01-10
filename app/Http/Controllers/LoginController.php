<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('username', 'password');
        $role = $request->input('role');

        if (Auth::attempt($credentials)) {
            switch ($role) {
                case 'author':
                    return redirect()->route('author.dashboard');
                case 'reviewer':
                    return redirect()->route('reviewer.dashboard');
                case 'editor':
                    return redirect()->route('editor.dashboard');
                case 'publisher':
                    return redirect()->route('publisher.dashboard');
                default:
                    Auth::logout();
                    return redirect()->route('login')->with('error', 'Invalid role selected.');
            }
        }

        return back()->with('error', 'Incorrect username or password.');
    }

    public function registerPage()
    {
        return view('account.register');
    }

    public function loginPage()
    {
        return view('account.home');
    }

    /**
     * Handle the registration request.
     */
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:6',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        return redirect()->route('dashboard')->with('success', 'Registration successful!');
    }
}
