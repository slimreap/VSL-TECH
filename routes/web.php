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
    return view('index');
})->name('home');

// route for products
Route::get('/products', function () {
    return view('products.productlist');
})->name('products');

// route for pc components
Route::get('/products/pccomponents', function () {
    return view('products.pccomponents');
})->name('productspccomponents');

// route for laptops
Route::get('/products/laptops', function () {
    return view('products.laptops');
})->name('productslaptops');

// route for desktop packages
Route::get('/products/desktoppackages', function () {
    return view('products.desktoppackages');
})->name('productsdesktoppackages');

// route for pheriperals
Route::get('/products/productspheriperals', function () {
    return view('products.productspheriperals');
})->name('productspheriperals');

// route for services
Route::get('/services', function () {
    return view('index');
})->name('services');