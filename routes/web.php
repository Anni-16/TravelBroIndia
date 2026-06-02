<?php

// use App\Http\Controllers\Admin\UserController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontEnd\MailController;
use App\Http\Controllers\frontEnd\BlogController;
use App\Http\Controllers\frontEnd\IndexController;

// for frontend
Route::get('/',[IndexController::class, 'IndexPage']);

// user Login Route 
Route::middleware(['vendor_check'])->group(function () {
    Route::get('/login', function () {
        return view('login');
    })->name('login');
});

// Send Email To User Register Route
// Route::post('/register', [MailController::class, 'RegisterEmail'])->name('register');

// User Register Route
Route::get('/register', function () {
    return view('register');
})->name('register');


// User About Us  Route
Route::get('/about-us', function () {
    return view('about');
})->name('about-us');

// User Conatct Us  Route
Route::get('/contact-us', function () {
    return view('contact-us');
})->name('contact-us');

/* ========= User Blogs  Route ============= */

// Blog list page (with blog data)
Route::get('/blog', [BlogController::class, 'BlogView'])->name('blog');
// Blog detail page
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog-details');



// for admin panel
require base_path('routes/admin.php');

// for Vendor Panel
require base_path('routes/vendor.php');






// Test
Route::get('/hotel-description', function () {
    return view('vendorDashboard.hotel-description');
})->name('hotel-description');
Route::get('/hotel-details', function () {
    return view('vendorDashboard.hotel-details');
})->name('hotel-details');

Route::get('/hotel-location', function () {
    return view('vendorDashboard.hotel-location');
})->name('hotel-location');

Route::get('/hotel-amenities', function () {
    return view('vendorDashboard.hotel-amenities');
})->name('hotel-amenities');


Route::get('/hotel-amenities', function () {
    return view('vendorDashboard.hotel-amenities');
})->name('hotel-amenities');


Route::get('/hotel-photos', function () {
    return view('vendorDashboard.hotel-photos');
})->name('hotel-photos');

Route::get('/hotel-pricing', function () {
    return view('vendorDashboard.hotel-pricing');
})->name('hotel-pricing');

Route::get('/hotel-booking', function () {
    return view('vendorDashboard.hotel-booking');
})->name('hotel-booking');
