<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Redirect to Author Dashboard.
     */
    public function authorDashboard()
    {
        return view('dashboard.author');
    }

    /**
     * Redirect to Reviewer Dashboard.
     */
    public function reviewerDashboard()
    {
        return view('dashboard.reviewer');
    }

    /**
     * Redirect to Editor Dashboard.
     */
    public function editorDashboard()
    {
        return view('dashboard.editor');
    }

    /**
     * Redirect to Publisher Dashboard.
     */
    public function publisherDashboard()
    {
        return view('dashboard.publisher');
    }

    /**
     * Logout the user.
     */
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
