<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\DeliveryController;
use App\Http\Controllers\AboutController;

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

//this will call view /about.blade.php
// Route::get('/about', function () {
//     return view('about');
// });

Route::get('/welcome', function () {
    return view('welcome');
});




// Route::get('/products', function () {
//     return view('product.index');
// });



//this will return the index.blade.php in views/product/index
Route::get('/products', [ProductController::class, 'index']);

Route::get('/index', [IndexController::class, 'index']);

Route::get('/delivery', [DeliveryController::class, 'index']);

Route::get('/about', [AboutController::class, 'index']);



// Product Route, index, create, show , edit , delete
Route::get('/product', [ProductController::class, 'index']);
Route::get('/product/create', [ProductController::class, 'create']);
Route::post('product/store', [ProductController::class, 'store']);
Route::get('/product/show/{product}', [ProductController::class, 'show']);
Route::get('/product/edit/{product}', [ProductController::class, 'edit']);
Route::get('/product/update/{product}', [ProductController::class, 'update']);
Route::delete('/product/delete/{product}', [ProductController::class, 'destroy']);
//Route::get('/product/delete/{product}', 'ProductController@destroy')->name('destroy/product');


//example
Route::get('/CP', function () {
    return 'Chess Player';
});
