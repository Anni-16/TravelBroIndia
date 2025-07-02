<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    // View about us
    public function aboutUs()
    {
        return view('about-us');
    }
}
