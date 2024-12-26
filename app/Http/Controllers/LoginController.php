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
}
