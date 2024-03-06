<?php

use Illuminate\Support\Facades\Route;
use App\Models\Message;
use App\Http\Controllers\ShopController;
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
Route::get('shop/product/{id}', [ShopController::class,'product'])->name('shop.product');
Route::get('shop/basket', [ShopController::class,'basket'])->name('shop.basket');
Route::get('shop/checkout', [ShopController::class,'checkout'])->name('shop.checkout');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
