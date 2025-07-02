<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ListingController;
use App\Http\Controllers\Admin\AmenitiesController;
use App\Http\Controllers\Admin\ProperTypeController;
use Illuminate\Support\Facades\Route;

// for admin panel index
// Route::get('/admin', function () {
//     return view('admin.index');
// });

// Middleware authcation for admin login
Route::middleware(['admin_guest'])->prefix('/admin/')->name('admin.')->group(function () {
    Route::get('login', [LoginController::class, 'showLoginPage'])->name('login.page');
    // for admin panel login
    Route::post('admin-login', [LoginController::class, 'login'])->name('admin-login');
});


// Middleware authcation for admin dashboard
Route::middleware(['admin_auth:admin'])->prefix('/admin/')->name('admin.')->group(function () {
    // Rediraction to the dashboard and Logout
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('admin-logout', [DashboardController::class, 'logout'])->name('admin-logout');

    // Manage User Routes
    // view user
    Route::get('manage-user', [UserController::class,'manageUser'])->name('manage-user');
    // add user
    Route::get('add-customer', [UserController::class,'manageCreate'])->name('add-customer');
    Route::post('add-customer', [UserController::class,'manageStore'])->name('add-customer');
    // edit user
    Route::get('edit-customer/{user}',    [UserController::class,'manageEdit'])->name('edit-customer');
    Route::put('edit-customer/{user}',    [UserController::class,'manageUpdate'])->name('edit-customer');
    // delete user
    Route::delete('manage-user/{user}',    [UserController::class,'manageDestroy'])->name('delete-customer');
    // End Mange user Routes

    // Manage Listing Routes
    // view listing
    Route::get('manage-listing', [ListingController::class,'manageListing'])->name('manage-listing');
    // This is use For get userdata form database
    Route::get('add-properties', [UserController::class,'getUsers'])->name('add-properties');
    // Add Listing/properties
    Route::get('add-properties', [ListingController::class,'addListing'])->name('add-properties');

    // End Manage Listing Routes




    // Manage Amenities Routes
    // View Amenities type
    Route::get('amenities-type', [AmenitiesController::class,'AmenitiesType'])->name('amenities-type');
    // Add Amenities Type
    Route::get('add-amenities-type', [AmenitiesController::class,'AddAmenities'])->name('add-amenities-type');
    Route::post('add-amenities-type', [AmenitiesController::class,'AddAmenitiesStore'])->name('add-amenities-type');
    // Edit Amenities Type
    Route::get('edit-amenities-type/{amenitiestypes}', [AmenitiesController::class,'EditAmenities'])->name('edit-amenities-type');
    Route::put('edit-amenities-type/{amenitiestypes}', [AmenitiesController::class,'UpdateAmenities'])->name('edit-amenities-type');
    // Delete Amenities Type
    Route::delete('amenities-type/{amenitiestypes}', [AmenitiesController::class, 'AmenitiesDestroy'])->name('delete-amenities-type');
    

    
    // View Amenities
    Route::get('amenities',[AmenitiesController::class,'Amenities'])->name('amenities');
    // Add Amenities 
    Route::get('add-amenities',[AmenitiesController::class,'AmenitiesAdd'])->name('add-amenities');
    Route::post('add-amenities',[AmenitiesController::class,'AmenitiesStore'])->name('add-amenities');
    // Edit Amenities 
    Route::get('edit-amenities/{amenitie}', [AmenitiesController::class,'AmenitiesEdit'])->name('edit-amenities');
    Route::put('edit-amenities/{amenitie}', [AmenitiesController::class,'AmenitiesUpdated'])->name('edit-amenities');
    // Delete Amenities Type
    Route::delete('amenities/{amenitie}', [AmenitiesController::class,'AmenitiesDelete'])->name('delete-amenities');

   // End Manage Amenities Routes



   // Start Manage Listing Setting Routes

  //  Manage Property type
//   View Property type
    Route::get('property-type', [ProperTypeController::class,'PropertyType'])->name('property-type');

  // End Manage Listing Setting Routes



});