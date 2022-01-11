<?php

use App\Http\Controllers\DonutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShoppingCartController;

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

// 前台
Route::get('/',[FrontController::class,'index'])->name('index');

// 菜單
Route::get('/product',[FrontController::class,'productList'])->name('product.list');

// 宅配限定
Route::get('/donut',[FrontController::class,'donutList'])->name('donut.list');

// 店面資訊
Route::get('/location',[FrontController::class,'locationList'])->name('location.list');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

// 購物車
Route::prefix('/shopping-cart')->group(function () {
    Route::post('/add',[ShoppingCartController::class,'add'])->name('shopping-cart.add');
    Route::post('/update',[ShoppingCartController::class,'update'])->name('shopping-cart.update');
});

// 後台
Route::prefix('/admin')->middleware(['auth'])->group(function () {
    // 菜單
    Route::resource('/products',ProductController::class);
    //甜甜圈
    Route::resource('/donuts',DonutController::class);

});





