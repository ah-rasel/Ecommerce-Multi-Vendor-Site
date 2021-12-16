<?php

use App\Http\Controllers\Admin\PermissionsController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('user.index');
});
Route::view('/shops', 'user.shops')->name('shops');
Route::view('/shop/shop-name', 'vendor.single-shop')->name('single.shop');
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
   
    // Admin
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::resource('role', RolesController::class);
        Route::resource('permission', PermissionsController::class);
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
