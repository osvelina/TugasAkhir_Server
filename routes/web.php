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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('Layouts.main');});
    

Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/Booking', function () {
    return view('Booking');
});

Route::get('/Produk', function () {
    return view('Produk');
});

Route::get('/Pembelian Produk', function () {
    return view('Pembelian Produk');
});

Route::get('/homepage', function () {
    return view('homepage');
});

Route::get('/login', function () {
    return view('login');
});

