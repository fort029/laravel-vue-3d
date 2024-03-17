<?php

use Illuminate\Support\Facades\Route;
use App\Models\Message;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RoleController;
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

Route::get('/', function () {
    $archiveMessages = Message::select('message')->latest()->take(10)->get();
    return view('welcome', ['archiveMessages'=>array_reverse($archiveMessages->toArray())]);
});

Route::get('shop', [ShopController::class,'index'])->name('shop.index');
Route::get('shop/category', [ShopController::class,'category'])->name('shop.category');
Route::get('shop/category/{category}', [ShopController::class,'category'])->name('shop.category_group');
Route::get('shop/product/{id}', [ShopController::class,'product'])->name('shop.product');
Route::get('shop/basket', [ShopController::class,'basket'])->name('shop.basket');
Route::get('shop/checkout', [ShopController::class,'checkout'])->name('shop.checkout');
Route::post('shop/xhr_products', [ShopController::class,'xhr_products']);

Auth::routes(['register' => false]);

Route::middleware('auth')->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    // Our resource routes
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);
});
