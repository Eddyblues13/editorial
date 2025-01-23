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
        return view('dashboard.home');
    }

    /**
     * Redirect to Reviewer Dashboard.
     */
    public function reviewerDashboard()
    {
        return view('dashboard.home');
    }

    /**
     * Redirect to Editor Dashboard.
     */
    public function editorDashboard()
    {
        return view('dashboard.home');
    }

    /**
     * Redirect to Publisher Dashboard.
     */
    public function publisherDashboard()
    {
        return view('dashboard.home');
    }

    /**
     * Logout the user.
     */
    public function destroy(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/'); // Redirect to the home page or login page
    }
}
