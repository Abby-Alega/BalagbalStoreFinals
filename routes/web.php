<?php

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

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/admin', function () {
    return view('adminDashboard');
});

Route::get('/dashboard', function () {
    return view('userDashboard');
});
