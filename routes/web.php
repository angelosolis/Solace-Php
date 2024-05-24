<?php


use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductReviewController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;


Route::get('/', [ProductController::class, 'index'])->name('home');
Route::get('/products', [ProductController::class, 'products'])->name('products');

Route::middleware(['guest'])->group(function () {
    Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('register', [RegisterController::class, 'register']);

    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [LoginController::class, 'login']);
});
Route::get('/product-detail/{id}',[ProductController::class, 'productDetails']);
Route::get('product-detail/{id}', [ProductController::class, 'show'])->name('product-detail');
Route::post('product/{id}/review', [ProductReviewController::class, 'store'])->name('product.review.store');

Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::post('cart/add', [CartController::class, 'addToCart'])->name('cart.add');
Route::post('order/place', [OrderController::class, 'placeOrder'])->name('order.place');


Route::get('cart', [CartController::class, 'showCart'])->name('cart');

