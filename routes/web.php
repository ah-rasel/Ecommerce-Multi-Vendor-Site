<?php

use App\Http\Controllers\Admin\PermissionsController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UsersController;
use App\Http\Livewire\Checkout;
use App\Http\Livewire\Shop;
use App\Http\Livewire\User\Dashboard;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/shop', Shop::class)->name('shop');
Route::resource('/product', ProductsController::class);

Route::view('/shops', 'user.shops')->name('shops');
Route::get('/shop/shop-name', [HomeController::class, 'vendor_shop_temp'])->name('single.shop');
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/checkout', Checkout::class)->name('checkout');

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
        Route::get('/dashboard', Dashboard::class)->name('dashboard');
    });


    // Vendor
    Route::prefix('vendor')->name('vendor.')->group(function () {
        Route::view('/dashboard', 'user.vendor.dashboard')->name('dashboard');
    });
});
