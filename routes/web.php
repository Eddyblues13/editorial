<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RegistrationController;

Route::get('/', function () {
    return view('account.home');
});


Route::get('/login', [LoginController::class, 'loginPage'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.user');
Route::get('/register', [LoginController::class, 'registerPage'])->name('register.page');
Route::post('/register', [LoginController::class, 'register'])->name('register');
Route::post('/registration/step1', [RegistrationController::class, 'step1Submit'])->name('registration.step1.submit');
Route::get('/registration/step2', [RegistrationController::class, 'step2'])->name('registration.step2');
Route::post('/registration/step2', [RegistrationController::class, 'step2Submit'])->name('registration.step2.submit');
Route::get('/registration/step3', [RegistrationController::class, 'step3'])->name('registration.step3');
Route::post('/registration/step3', [RegistrationController::class, 'step3Submit'])->name('registration.step3.submit');


Route::middleware(['auth'])->group(function () {
    // Dashboard Routes
    Route::get('/author/dashboard', [DashboardController::class, 'authorDashboard'])->name('author.dashboard');
    Route::get('/reviewer/dashboard', [DashboardController::class, 'reviewerDashboard'])->name('reviewer.dashboard');
    Route::get('/editor/dashboard', [DashboardController::class, 'editorDashboard'])->name('editor.dashboard');
    Route::get('/publisher/dashboard', [DashboardController::class, 'publisherDashboard'])->name('publisher.dashboard');

    // Logout Route
    Route::get('/logout', [DashboardController::class, 'logout'])->name('logout');
});
