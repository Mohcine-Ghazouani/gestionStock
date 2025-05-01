<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\StockMovementController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');





Route::resource('products', ProductController::class);
Route::resource('categories', CategoryController::class);
Route::resource('stock', StockMovementController::class)->only(['index', 'create', 'store']);
