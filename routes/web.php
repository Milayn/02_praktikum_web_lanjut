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
    return view('welcome');
});

Route::get('/', function () {
    echo "Selamat Datang";
});

Route::get('/about', function () {
    echo "Nim   : 2041720027<br>
          Nama  : Mila Yunita<br>
          Kelas : TI-2C";
});

Route::get('/articles/{id}', function ($id) {
    echo "Halaman artikel dengan ID ".$id;
});


