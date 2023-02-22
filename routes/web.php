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
    echo "Selamat Datang";
});
Route::get('/about', function () {
    echo "NIM  : 2141720124 <br>";
    echo "Nama : Taufiqy Firdaus Jatu";
});
Route::get('/articles/{id}', function ($id) {
    echo "Halaman Artikel dengan ID : $id";
});