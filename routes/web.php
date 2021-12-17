<?php

use App\Http\Controllers\Admin\PermissionsController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;


Route::view('/', 'user.index');
Route::view('/shop', 'user.shop')->name('shop');
Route::resource('/product', ProductsController::class);

Route::view('/shops', 'user.shops')->name('shops');
Route::view('/shop/shop-name', 'vendor.single-shop')->name('single.shop');
Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    // Admin - Protected with middleware
    Route::middleware(['admin_area'])->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::prefix('admin')->name('admin.')->group(function () {
            Route::resource('users', UsersController::class);
            Route::resource('role', RolesController::class);
            Route::resource('permission', PermissionsController::class)->only(['index']);
        });
    });


    // Customer
    Route::prefix('customer')->name('customer.')->group(function () {
        Route::view('/dashboard', 'user.customer.dashboard')->name('dashboard');
    });


    // Vendor
    Route::prefix('vendor')->name('vendor.')->group(function () {
        Route::view('/dashboard', 'user.vendor.dashboard')->name('dashboard');
    });
});
