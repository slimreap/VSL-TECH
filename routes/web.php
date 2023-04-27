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

Route::get('products/products_details', function(){
    return view('products_details');
});

Route::get('products/products_details/product_customer_form', function(){
    return view('product_customer_form');
});

// route for services
Route::get('/services', function () {
    return view('services.services');
})->name('services');

Route::get('services/availserviceform', function (){
    return view('services.availserviceform');
});
Route::get('services/availserviceform/receipt', function (){
    return view('services.receipt');
});
