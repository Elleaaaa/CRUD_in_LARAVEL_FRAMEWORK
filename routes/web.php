<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\IndexController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//this will call view /hello.blade.php
Route::get('/about', function () {
    return view('about');
});


// Route::get('/products', function () {
//     return view('product.index');
// });



//this will return the index.blade.php in views/product/index
Route::get('/products', [ProductController::class, 'index']);

Route::get('/index', [IndexController::class, 'index']);



//example
Route::get('/CP', function () {
    return 'Chess Player';
});
