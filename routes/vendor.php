<?php

use App\Http\Controllers\vendor\vendorController;
use App\Http\Controllers\vendor\listingController;
use Illuminate\Support\Facades\Route;

/*========================
  Vendor Portal Routes State
  ============================*/

//   Resgister Routes
Route::post('register', [vendorController::class, 'register']);
//   Login Routes
Route::post('login', [vendorController::class, 'login']);


/* ============ Vendordashboard Portal Routes =============== */

Route::middleware(['vendor_auth'])->prefix('/vendor/')->name('vendorDashboard.')->group(function () {

    // dashboard routes
    Route::get('dashboard', [vendorController::class, 'vendorIndex'])->name('vendorDashboard');
    // Log Out Routes
    Route::get('logout', [vendorController::class, 'logout'])->name('logout');

    // Manage Listing Route
    Route::get('hotel-listing', [listingController::class, 'listingIndex'])->name('hotel-listing');
    Route::post('hotel-add', [listingController::class, 'addHotel'])->name('add-hotel');

   // Edit Vendor Profile Route
Route::get('edit-profile', [VendorController::class, 'profileView'])->name('edit-profile');

// Update Vendor Profile Route
Route::post('update-profile', [VendorController::class, 'profileUpdate'])->name('update-profile');


});

// Customer route
Route::middleware(['customer_check'])->group(function () {
    Route::get('customer/dashboard', [vendorController::class, 'customerIndex'])->name('customerDashboard');
});
