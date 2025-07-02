<?php

use App\Http\Controllers\vendor\vendorController;
use App\Http\Controllers\vendor\listingController;
use Illuminate\Support\Facades\Route;

// for Vendor Panel
Route::post('register', [vendorController::class, 'register']);
Route::post('login', [vendorController::class, 'login']);

Route::middleware(['vendor_auth'])->prefix('/vendor/')->name('vendorDashboard.')->group(function () {
    Route::get('dashboard', [vendorController::class, 'vendorIndex'])->name('vendorDashboard');
    Route::get('logout', [vendorController::class, 'logout'])->name('logout');

    // Manage Listing Route
    Route::get('hotel-listing', [listingController::class, 'listingIndex'])->name('hotel-listing');
    Route::post('hotel-add', [listingController::class, 'addHotel'])->name('add-hotel');

    // Edit Vendor Profile Route
    // Route::get('edit-profile/{user}', [vendorController::class, 'profileView'])->name('edit-profile');

});

// Customer route
Route::middleware(['customer_check'])->group(function () {
    Route::get('customer/dashboard', [vendorController::class, 'customerIndex'])->name('customerDashboard');
});
