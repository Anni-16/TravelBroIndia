<?php

// use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

// for frontend
Route::get('/', function () {
    return view('welcome');
});
Route::middleware(['vendor_check'])->group(function () {
    Route::get('/login', function () {
        return view('login');
    })->name('login');
});

// User Register Route
Route::get('/register', function () {
    return view('register');
})->name('register');

// User About Us Route
Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');

// for admin panel
require base_path('routes/admin.php');

// for Vendor Panel
require base_path('routes/vendor.php');
