<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ListingController;
use App\Http\Controllers\Admin\AmenitiesController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ProperTypeController;
use App\Http\Controllers\Admin\WebsiteController;
use Illuminate\Support\Facades\Route;


// Middleware authcation for admin login
Route::middleware(['admin_guest'])->prefix('/admin/')->name('admin.')->group(function () {
  Route::get('login', [LoginController::class, 'showLoginPage'])->name('login-page');
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
  Route::get('manage-user', [UserController::class, 'manageUser'])->name('manage-user');
  // add user
  Route::get('add-customer', [UserController::class, 'manageCreate'])->name('add-customer');
  Route::post('add-customer', [UserController::class, 'manageStore'])->name('add-customer');
  Route::patch('/user/status/{id}', [UserController::class, 'toggleStatus'])->name('toggle-status');

  // edit user
  Route::get('edit-customer/{user}',    [UserController::class, 'manageEdit'])->name('edit-customer');
  Route::put('edit-customer/{user}',    [UserController::class, 'manageUpdate'])->name('edit-customer');
  // delete user
  Route::delete('manage-user/{user}',    [UserController::class, 'manageDestroy'])->name('delete-customer');
  // End Mange user Routes

  // Manage Listing Routes
  // view listing
  Route::get('manage-listing', [ListingController::class, 'manageListing'])->name('manage-listing');

  // Add Listing/properties
  // Step 1
  Route::get('add-list-basic', [ListingController::class, 'addListingBasic'])->name('add-list-basic');
  Route::post('add-list-description', [ListingController::class, 'ListingBasicstore'])->name('add-list-description');
  // Step 2
  Route::get('add-list-description', [ListingController::class, 'addListingDescription'])->name('add-list-description');
  Route::post('add-list-location', [ListingController::class, 'addListingDescriptionStore'])->name('add-list-location');

  // Step 3
  Route::get('add-list-location', [ListingController::class, 'addListingLocation'])->name('add-list-location');
  Route::post('add-list-amenities', [ListingController::class, 'addListingLocationStore'])->name('admin.add-list-amenities');

  // Step 4
  Route::get('add-list-amenities', [ListingController::class, 'addListingAmenities'])->name('add-list-amenities');
  Route::post('add-list-photos', [ListingController::class, 'addListingAmenitiesStore'])->name('add-list-photos');

  // Step 5
  Route::get('add-list-photos', [ListingController::class, 'addListingPhotos'])->name('add-list-photos');
  Route::post('add-list-pricing', [ListingController::class, 'addListingPhotosStore'])->name('add-list-pricing');

  // Step 6
  Route::get('add-list-pricing', [ListingController::class, 'addListingPricing'])->name('add-list-pricing');
  Route::post('add-list-policies', [ListingController::class, 'addListingPricingStore'])->name('add-list-policies');

  // Step 7
  Route::get('add-list-policies', [ListingController::class, 'addListingPolicies'])->name('add-list-policies');
  Route::post('manage-listing', [ListingController::class, 'addListingPoliciesStore'])->name('manage-listing');


  // End Manage Listing Routes




  // Start Manage Property Setting Routes
  // =======================================


  //  Manage Property type
  //   View Property type
  Route::get('property-category', [ProperTypeController::class, 'PropertyType'])->name('property-category');
  // Add Property Type
  Route::get('add-property-category', [ProperTypeController::class, 'AddProperty'])->name('add-property-category');
  Route::post('add-property-category', [ProperTypeController::class, 'AddPropertyStore'])->name('add-property-category');
  // Edit Property Type
  Route::get('edit-property-category/{propertyType}', [ProperTypeController::class, 'EditProperty'])->name('edit-property-category');
  Route::put('edit-property-category/{propertyType}', [ProperTypeController::class, 'UpdateProperty'])->name('edit-property-category');
  // Delete Amenities Type
  Route::delete('property-category/{propertyType}', [ProperTypeController::class, 'PropertyDestroy'])->name('delete-property-category');


  //  Manage Rooms type
  //   View Rooms type
  Route::get('rooms-type', [ProperTypeController::class, 'RoomType'])->name('rooms-type');
  // Add Property Type
  Route::get('add-rooms-type', [ProperTypeController::class, 'AddRoom'])->name('add-rooms-type');
  Route::post('add-rooms-type', [ProperTypeController::class, 'AddRoomStore'])->name('add-rooms-type');
  // Edit Property Type
  Route::get('edit-rooms-type/{roomtype}', [ProperTypeController::class, 'EditRoom'])->name('edit-rooms-type');
  Route::put('edit-rooms-type/{roomstype}', [ProperTypeController::class, 'UpdateRoom'])->name('edit-rooms-type');
  // Delete Amenities Type
  Route::delete('rooms-type/{roomtype}', [ProperTypeController::class, 'RoomDestroy'])->name('delete-rooms-type');


  // Manage Amenities Routes
  // View Amenities type
  Route::get('amenities-type', [AmenitiesController::class, 'AmenitiesType'])->name('amenities-type');
  // Add Amenities Type
  Route::get('add-amenities-type', [AmenitiesController::class, 'AddAmenities'])->name('add-amenities-type');
  Route::post('add-amenities-type', [AmenitiesController::class, 'AddAmenitiesStore'])->name('add-amenities-type');
  // Edit Amenities Type
  Route::get('edit-amenities-type/{amenitiestypes}', [AmenitiesController::class, 'EditAmenities'])->name('edit-amenities-type');
  Route::put('edit-amenities-type/{amenitiestypes}', [AmenitiesController::class, 'UpdateAmenities'])->name('edit-amenities-type');
  // Delete Amenities Type
  Route::delete('amenities-type/{amenitiestypes}', [AmenitiesController::class, 'AmenitiesDestroy'])->name('delete-amenities-type');



  // View Amenities
  Route::get('amenities', [AmenitiesController::class, 'Amenities'])->name('amenities');
  // Add Amenities 
  Route::get('add-amenities', [AmenitiesController::class, 'AmenitiesAdd'])->name('add-amenities');
  Route::post('add-amenities', [AmenitiesController::class, 'AmenitiesStore'])->name('add-amenities');
  // Edit Amenities 
  Route::get('edit-amenities/{amenitie}', [AmenitiesController::class, 'AmenitiesEdit'])->name('edit-amenities');
  Route::put('edit-amenities/{amenitie}', [AmenitiesController::class, 'AmenitiesUpdated'])->name('edit-amenities');
  // Delete Amenities Type
  Route::delete('amenities/{amenitie}', [AmenitiesController::class, 'AmenitiesDelete'])->name('delete-amenities');

  // End Manage Amenities Routes




  // End Manage Listing Setting Routes
  //=============================================


  /* Start Manage Blog Routes
   ======================================== */

  // View Blog
  Route::get('manage-blog', [BlogController::class, 'Blog'])->name('manage-blog');
  // Add Blog 
  Route::get('add-blog', [BlogController::class, 'AddBlog'])->name('add-blog');
  Route::post('add-blog', [BlogController::class, 'BlogStore'])->name('add-blog');
  // Edit Blog 
  Route::get('edit-blog/{blog}', [BlogController::class, 'BlogEdit'])->name('edit-blog');
  Route::put('edit-blog/{blog}', [BlogController::class, 'BlogUpdated'])->name('edit-blog');
  // Delete Blog Type
  Route::delete('manage-blog/{blog}', [BlogController::class, 'BlogDestroy'])->name('delete-blog');

  /* End Manage Blog Routes
   ======================================== */


  /* Start  Manage Website Settings Routes
   ======================================== */

  // View Soical Media
  Route::get('social-media', [WebsiteController::class, 'SocialMedia'])->name('social-media');
  Route::post('social-media', [WebsiteController::class, 'SocialMediaStore'])->name('social-media');

  // View manage CMS
  Route::get('manage-cms', [WebsiteController::class, 'ManageCMS'])->name('manage-cms');

  // View Manage Cms About Edit
  Route::get('about-us/{id}',[WebsiteController::class, 'AboutUsEdit'])->name('about-us');




  /* End Manage Website Settings Routes
  ==================================== */
});
