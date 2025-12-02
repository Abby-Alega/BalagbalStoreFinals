<?php

use App\Http\Controllers\AuthController;
use App\Models\Customer;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/debug', function () {
    $customers = Customer::all();
    return view('debug', compact('customers'));
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/admin', function () {
    return view('adminDashboard');
});

Route::get('/dashboard', function () {
    return view('userDashboard');
});
