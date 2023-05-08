<?php

use App\Http\Controllers\Pc_componentsController;
use App\Http\Controllers\ProductListController;
use App\Http\Controllers\ServiceListController;
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

// route for checkout
Route::get('/products/checkout/confirmcheckout', [ProductListController::class, 'confirmcheckout'])->name('confirmcheckout');

// route for customer form
Route::get('/products/checkout/{category?}/{id?}', [ProductListController::class, 'productcheckout'])->name('productcheckout');
// route for laptop customer checkout
Route::get('/products/details/{category?}/{id?}', [ProductListController::class, 'laptopcustomerform'])->name('productform');
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
Route::get('/services',[ServiceListController::class, 'availableservice'])->name('services');

//route for viewign service details
Route::get('services/viewservice/{servicename?}', [ServiceListController::class, 'serviceList'])->name('viewservice');

//route for service customer form
Route::get('services/viewservices/availserviceform/{id?}', [ServiceListController::class, 'serviceCustomerForm'])->name('serviceCustomerForm');
// route for listing of pc components
Route::get('/products/pccomponents/{component?}', [Pc_componentsController::class, 'listpccomponents'])->name('productspccomponents');


// route for services


//might change the url path 
Route::get('services/viewservice', function(){
    return view('services.viewservice   ');
});

Route::get('services/viewservice/availserviceform', function (){
    return view('services.availserviceform');
});

Route::get('services/availserviceform/receipt', function (){
    return view('services.receipt');
});

// route for service customer form
Route::get('services/availserviceform/{servicename?}',[ServiceListController::class,'checkoutservice'])->name('checkoutservice');

// route for service submission form
Route::post('services/availserviceform/avail',[ServiceListController::class,'confirmservice'])->name('confirmservice');

// route for add to cart
Route::post('products/addtocart', [ProductListController::class, 'addtocart'])->name('addtocart');

//Route  Item bagview
Route::get('products/itemviewsummary',[ProductListController::class,'viewcart'])->name('itemviewsummary');



//Route  Bulk checkout
Route::post('products/itemviewsummary/bulkcheckout',[ProductListController::class,'bulkcheckout'])->name('bulkcheckout');


//Route  Payment status
Route::get('admin/payment/status',[ProductListController::class,'paymentstatus'])->name('');

