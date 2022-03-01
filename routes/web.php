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

Route::get('/{id}', function ($id) {
echo "Selamat Datang".$id;
});


Route::get('articles/{id}', function ($id) {
    echo "Selamat Datang Kamu Dengan NIM ".$id;
});
