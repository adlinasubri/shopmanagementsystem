<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// php artisan make:view login

Route::get('/login', function () {
    return view('login');
});


Route::get('/dashboard', function () {
    return view('dashboard');
});

