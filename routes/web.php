<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageControllers;

// Home Route
Route::get('/', [AuthController::class, 'home'])->name('home');

// Sign Up Routes
Route::get('/signup', [AuthController::class, 'showSignUp'])->name('signup');
Route::post('/signup', [AuthController::class, 'signUp'])->name('signup.post');

// Login Routes
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

// Dashboard Route (Protected)
Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard')->middleware('auth');

// Logout Route
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


// page controller
Route::get('/', [PageControllers::class, 'home'])->name('home');
Route::get('/pricing', [PageControllers::class, 'pricing'])->name('pricing');
Route::get('/about', [PageControllers::class, 'about'])->name('about');
Route::get('/contact', [PageControllers::class, 'contact'])->name('contact');
Route::get('/faqs', [PageControllers::class, 'faqs'])->name('faqs');
// end of page controller




Route::middleware(['auth'])->group(function () {
    Route::post('/deposit', [TransactionController::class, 'deposit']);
    Route::post('/withdraw', [TransactionController::class, 'withdraw']);
    Route::post('/referral-earnings', [TransactionController::class, 'referralEarnings']);
});
