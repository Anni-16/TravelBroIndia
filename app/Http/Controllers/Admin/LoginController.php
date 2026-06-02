<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Session;


class LoginController extends Controller
{
    public function __construct(){
        $this->Admin = new Admin();
    }

    // For admin Login Functions
    public function showLoginPage()
    {
        return view('admin.auth.login');
    }

    // For Login Info 
    public function login(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        $admin = $this->Admin->admin_login($data);

        if (!empty($admin)) {
            session(['adminLogin' => true]);
            session(['Role' => 'Admin']);
            return redirect()->route('admin.dashboard');
        } else {
            session()->flash('error', 'Invalid Email or Password');
            return redirect()->back();
        }
    }
}
