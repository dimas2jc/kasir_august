<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

// User

Route::get('login', function () {
    return view('Auth.login');
})->name('login');

Route::get('recovery-password', function () {
    return view('Auth.recovery-password');
})->name('recovery-password');

// For Owner















// For Admin Kasir
