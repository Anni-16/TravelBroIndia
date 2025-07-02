<?php

namespace App\Http\Controllers\vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Customer;
use Illuminate\Support\Facades\Session;

class vendorController extends Controller
{
    protected $Customer;
    public function __construct()
    {
        $this->Customer = new Customer;
    }
    // Vendor Dashboard
    public function vendorIndex()
    {
        return view('vendorDashboard.dashboard');
    }
    // Vendor And Customer Register function
    public function customerIndex()
    {
        return view('vendorDashboard.dashboard');
    }
    public function register(Request $request)
    {
        // Validation rules
        $rules = [
            'firstname' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'role' => 'required',
            'password' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->route('register')->withInput()->withErrors($validator);
        }

        $lastUser = Customer::latest()->first();
        $nextNumber = $lastUser ? (intval(substr($lastUser->user_id, -2)) + 1) : 1;
        $userId = 'USER-' . str_pad($nextNumber, 2, '0', STR_PAD_LEFT);

        // Create a new user instance
        $data = [
            'user_id' => $userId,
            'firstname' => $request->post('firstname'),
            'lastname' => $request->post('lastname'),
            'email' => $request->post('email'),
            'phone' => $request->post('phone'),
            'password' => $request->post('password'),
            'role' => $request->post('role'),
            'status' => $request->post('status', 'Inactive'),
        ];
        $result = $this->Customer->register($data);
        if ($result) {
            session()->flash('success', 'Registration Successfully Done');
            return redirect()->route('login');
        } else {
            session()->flash('error', 'Registration Failed');
            return redirect()->route('login');
        };
    }

    // Vendor And Customer Login Function
    public function login(Request $request)
    {
        // Validation rules
        $rules = [
            'email' => 'required|email',
            'role' => 'required',
            'password' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->route('login')->withInput()->withErrors($validator);
        }

        // Create a new user instance
        $data = [
            'email' => $request->post('email'),
            'password' => $request->post('password'),
            'role' => $request->post('role'),
        ];

        $result = $this->Customer->login($data);
        if (!empty($result)) {
            if ($result->status == 'Active') {
                if ($result->role == 'Vendor') {
                    session(['vendorLogin' => true]);
                    session(['userData' => $result]);
                    session()->flash('success', 'Login Successfully Done');
                    return redirect()->route('vendorDashboard.vendorDashboard');
                } else {
                    session(['customerLogin' => true]);
                    session(['userData' => $result]);
                    session()->flash('success', 'Login Successfully Done');
                    return redirect()->route('customerDashboard');
                }
            } else {
                session()->flash('error', 'Your Account is Deactive!');
                return redirect()->route('login');
            }
        } else {
            session()->flash('error', 'Invalid Email Or Password!');
            return redirect()->route('login');
        };
    }


    // Logout function
    public function logout(Request $request)
    {
        Session::flush();
        return redirect()->route('login'); 
    }

    // Edit Vendor Profile View 
    public function profileView($id){
        $users = Customer::findOrFail($id);
        return view('vendorDashboard.edit-vendor-profile',[
            'users' => $users
        ]);
    }

   // Edit Vendor Profile
   
}
