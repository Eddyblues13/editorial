<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('account.home');
});


Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::middleware(['auth'])->group(function () {
    // Dashboard Routes
    Route::get('/author/dashboard', [DashboardController::class, 'authorDashboard'])->name('author.dashboard');
    Route::get('/reviewer/dashboard', [DashboardController::class, 'reviewerDashboard'])->name('reviewer.dashboard');
    Route::get('/editor/dashboard', [DashboardController::class, 'editorDashboard'])->name('editor.dashboard');
    Route::get('/publisher/dashboard', [DashboardController::class, 'publisherDashboard'])->name('publisher.dashboard');

    // Logout Route
    Route::get('/logout', [DashboardController::class, 'logout'])->name('logout');
});
