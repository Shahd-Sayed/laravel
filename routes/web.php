<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ProductController;


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

Route::get('/clients/register', function () {
    return view('clients/register');
});

Route::get('/clients/login', function () {
    return view('clients/login');
});

Route::get('/clients/edit', function () {
    return view('clients/edit');
});

Route::get('/clients/logout', function () {
    return view('clients/logout');
});

Route::get('/clients/profile', function () {
    return view('clients/profile');
});

Route::get('/orders/create', function () {
    return view('orders/create');
});

Route::get('/orders/index', function () {
    return view('orders/index');
});

// Route::get('/products/create', function () {
//     return view('products/create');
// });

// Route::get('/products/index', function () {
//     return view('products/index');
// });

// Route::get('/products/edit', function () {
//     return view('products/edit');
// });

// Route::get('/products/details', function () {
//     return view('products/details');
// });

// Route::get('/products/delete', function () {
//     return view('products/delete');
// });

// Route::get("/products/{product_id?}/orders/{order_id?}", function($x="",$y=""){
//     echo "product $x or order $y";
// });

Route::get("/getName/{name?}",function($y = ""){
    echo "Name is : $y";
});

Route::get("/type",[TestController::class , "Test"]);

// Route::get("/product",[ProductController::class,"index"]);
// Route::get("/product/create",[ProductController::class,"create"]);
// Route::post("/product",[ProductController::class,"store"]);
// Route::get("/product/{id}",[ProductController::class,"show"]);
// Route::get("/product/{id}/edit",[ProductController::class,"edit"]);
// Route::put("/product/{id}",[ProductController::class,"update"]);
// // Route::delete("/product",[ProductController::class,"destroy"]);
Route::resource("/product",ProductController::class);