<?php

use Illuminate\Support\Facades\Route;

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

Route::resource("/", \App\Http\Controllers\frontend\HomeController::class);
Route::get("/home", [
    \App\Http\Controllers\frontend\HomeController::class,
    "index",
])->name("home");
//products
Route::resource("/product", \App\Http\Controllers\frontend\ProductController::class);
Route::get('product/{id}', [\App\Http\Controllers\frontend\ProductController::class, 'show'])->name('posts.show');
Route::get("/products/brand/{id}", '\App\Http\Controllers\frontend\ProductController@productsPerBrand')->name('productsPerBrand');

//cart
Route::post('/addToCart/{id}', '\App\Http\Controllers\frontend\ProductController@addToCart')->name('addToCart');
Route::get('/cart', '\App\Http\Controllers\frontend\ProductController@cart')->name('cart');
Route::post('/cart', '\App\Http\Controllers\frontend\ProductController@updateQuantity')->name('quantity');
Route::get('/removeItem/{id}', '\App\Http\Controllers\frontend\ProductController@removeItem')->name('removeItem');

//cart-address
Route::get("/cart-address", '\App\Http\Controllers\frontend\ProductController@cartAddress')->name('cart-address');
Route::post('/cart-address/step1', '\App\Http\Controllers\frontend\CheckoutController@checkoutShippingAddress')->name('checkoutShippingAddress');
Route::post('/cart-address/step2', '\App\Http\Controllers\frontend\CheckoutController@checkoutBillingAddress')->name('checkoutBillingAddress');

//payment
Route::post('/checkout', '\App\Http\Controllers\frontend\CheckoutController@checkout')->name('checkout');
Route::get('/failure', '\App\Http\Controllers\frontend\CheckoutController@failure')->name('checkout.failure');
Route::get('/success', [App\Http\Controllers\frontend\CheckoutController::class, 'success'])->name('checkout.success');
Route::get('/cancel', [App\Http\Controllers\frontend\ProductController::class, 'cancel'])->name('checkout.cancel');
Route::post('/webhook', '\App\Http\Controllers\frontend\CheckoutController@webhook')->name('checkout.webhook');

//Remove session after payment
Route::get("/succes/end", '\App\Http\Controllers\frontend\CheckoutController@sessionFlush')->name('sessionFlush');
//Backend

require('backend.php');
