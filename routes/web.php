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

Route::get('/dataPegawai', 'pegawaiController@index');
Route::post('/dataPegawai/insert', 'pegawaiController@store');
Route::post('editDataPegawai/update/{id}', 'pegawaiController@update');
Route::get('/dataPegawai/search', 'pegawaiController@search');
Route::get('/laporan', function () {
    return view('owner.laporan');
});
Route::get('/dataBarang', 'barangController@index');
Route::post('/dataBarang/insert', 'barangController@store');
Route::post('/dataBarang/update/{id}', 'barangController@update');
Route::get('/dataBarang/delete/{id}', 'barangController@destroy');
Route::get('/dataBarang/search', 'barangController@search');





// Admin Kasir

Route::get('/kasir', function () {
    return view('kasir.kasir');
});
