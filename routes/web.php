<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('user.index');
});
Route::view('/shops', 'user.shops')->name('shops');
Route::view('/shop/shop-name', 'vendor.single-shop')->name('single.shop');
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    // Customer
    Route::prefix('customer')->name('customer.')->group(function () {
            Route::view('/dashboard', 'user.customer.dashboard')->name('dashboard');
    });

    // Vendor
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
