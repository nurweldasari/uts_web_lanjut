<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransaksiController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');

// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::post('/login', function () {
    return redirect()->route('dashboard');
})->name('login.redirect');

// Redirect from dashboard to product
Route::get('/dashboard/product', function () {
    return redirect()->route('product');
})->name('dashboard.product');

Route::get('/product', [ProductController::class, 'index'])->name("product");
Route::post('/product', [ProductController::class, 'store'])->name("product.store");
Route::get('/product/create', [ProductController::class, 'create'])->name("product.create");
Route::post('/product/{product}', [ProductController::class, 'update'])->name("product.update");
Route::delete('/product/{product}', [ProductController::class, 'destroy'])->name("product.destroy");
Route::get('/product/{product}/edit', [ProductController::class, 'edit'])->name("product.edit");

Route::get('/transaksi', [TransaksiController::class, 'showForm'])->name('transaksi.form');
Route::post('/transaksi', [TransaksiController::class, 'processTransaksi'])->name('transaksi.process');

