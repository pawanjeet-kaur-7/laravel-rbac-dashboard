<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return redirect()->route('login');
});


Route::get('/products', [ProductController::class, 'all'])->name('allProducts');
Route::get('/cart', [CartController::class, 'cart'])->name('myCart');
Route::get('/orders', [OrderController::class, 'orders'])->name('myOrders');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::prefix('users')->group(function () {
        Route::get('/list', [UserController::class, 'list'])->name('users.list');
    });
    
    Route::prefix('products')->group(function () {
        Route::get('/list', [ProductController::class, 'list'])->name('products.list');
    });

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
