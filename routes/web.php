<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', 'HomeController@index');


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('products', 'ProductController');


Route::get('/products', 'ProductController@index')->name('products.index');


Route::resource('products', ProductController::class);

// Routes for the ProductController
Route::get('/products', 'ProductController@index')->name('products.index');
Route::get('/products/create', 'ProductController@create')->name('products.create');
Route::post('/products', 'ProductController@store')->name('products.store');

Route::get('/products', [ProductController::class, 'index']);

Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');

Route::get('/admin', 'AdminController@index')->name('admin.dashboard');

Route::get('/admin', [AdminController::class, 'index']);