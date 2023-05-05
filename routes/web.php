<?php

use App\Http\Controllers\Pc_componentsController;
use App\Http\Controllers\ProductListController;
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
Route::get('/products',[ProductListController::class, 'productList'])->name('products');

// route for laptops
Route::get('/products/laptops/{brandname?}', [ProductListController::class, 'laptopList'])->name('productslaptops');
// route for peripherals and accessories
Route::get('products/peripherals_and_accessories/{brandname?}', [ProductListController::class, 'laptopList'])->name('producsPeripheralsNaccessories');
// route for laptop checkout
Route::get('/products/laptops/checkout/confirmcheckout', [ProductListController::class, 'confirmcheckout'])->name('confirmcheckout');

// route for laptop customer form
Route::get('/products/laptops/checkout/{id?}', [ProductListController::class, 'productcheckout'])->name('productcheckout');
// route for laptop customer checkout
Route::get('/products/laptops/details/{id?}', [ProductListController::class, 'laptopcustomerform'])->name('productform');
// route for laptop search
Route::post('/products/laptops/search', [ProductListController::class, 'searchlaptop'])->name('searchlaptop');



// route for desktop packages
Route::get('/products/desktoppackages/{setname?}', [ProductListController::class, 'desktopPackagesList'])->name('desktoppackages');

// route for pheriperals
Route::get('/products/productspheriperals', function () {
    return view('products.productspheriperals');
})->name('productspheriperals');

Route::get('products/products_details', function(){
    return view('productview');
});

Route::get('products/products_details/product_customer_form', function(){
    return view('products.productview');
});

Route::get('products/products_details/product_customer_form/product_receipt', function(){
    return view('product_receipt');
});

// route for services
Route::get('/services', function () {
    return view('services.services');
})->name('services');

// route for listing of pc components
Route::get('/products/pccomponents/{component?}', [Pc_componentsController::class, 'listpccomponents'])->name('productspccomponents');


// route for services
Route::get('services/availserviceform', function (){
    return view('services.availserviceform');
});

//might change the url path 
Route::get('services/viewservice', function(){
    return view('services.viewservice   ');
});
Route::get('services/availserviceform/receipt', function (){
    return view('services.receipt');
});
