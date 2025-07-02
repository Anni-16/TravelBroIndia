<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ListingController extends Controller
{
  // This Method will Show manage user page
  public function manageListing(){
    // $listings = Listing::orderBy('created_at', 'desc')->get();
    //   return view('admin.manage-user',[
    //     'users' => $users
    //   ]);
              // return redirect()->route('admin.manage-listing');
              return View ('admin.manage-listing');

  }

    // This Method will Show add Listing page
  public function addListing(){
              return View ('admin.add-listing');

  }
}
