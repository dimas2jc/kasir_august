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
    return view('owner.dashboard');
})->name('dashboard');

// User

Route::get('login', function () {
    return view('Auth.login');
})->name('login');

Route::get('recovery-password', function () {
    return view('Auth.recovery-password');
})->name('recovery-password');


// owner

Route::get('/dataPegawai', function () {
    return view('owner.dataPegawai');
});

Route::get('/laporan', function () {
    return view('owner.laporan');
});

Route::get('/inputPegawai', function () {
    return view('owner.inputPegawai');
});

Route::get('/editDataPegawai', function () {
    return view('owner.editDataPegawai');
});



// Admin Kasir

Route::get('/kasir', function () {
    return view('kasir.kasir');
});
