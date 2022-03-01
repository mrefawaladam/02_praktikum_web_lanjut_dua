<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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
// public index
Route::get('/',[PageController::class,'index'])->name('home');
// about
Route::get('about',[PageController::class,'about'])->name('about');

Route::get('articles/{id}',[PageController::class,'articles'])->name('articles');

