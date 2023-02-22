<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ContactController;


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

// Praktikum 1
// Route::get('/', function () {
//     echo "Selamat Datang";
// });
// Route::get('/about', function () {
//     echo "NIM  : 2141720124 <br>";
//     echo "Nama : Taufiqy Firdaus Jatu";
// });
// Route::get('/articles/{id}', function ($id) {
//     echo "Halaman Artikel dengan ID : $id";
// });


// Praktikum 2
// Route::get('/', [HomeController::class, 'index']);
// Route::get('/about', [AboutController::class, 'about']);
// Route::get('/articles', [ArticleController::class, 'articles']);


// Praktikum 3
Route::get('/', [HomeController::class, 'index']);
Route::get('/category/{category_name}', [ProductController::class, 'index']);
Route::get('/news/{news_name}', [NewsController::class, 'index']);
Route::get('/program/{program_name}', [ProgramController::class, 'index']);
Route::get('/about', [AboutController::class, 'about']);
Route::resource('/contact-us', ContactController::class);