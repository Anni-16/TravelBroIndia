<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public function index() 
    {
        return view('admin.dashboard');
    }

    // Logout function
    public function logout(Request $request)
    {
        Session::flush();
        return redirect()->route('admin.admin-login'); 
    }

}
