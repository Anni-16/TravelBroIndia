<?php

namespace App\Http\Controllers\vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\RegisterEmail;
use App\Mail\AdminRegisterNotification;
use Illuminate\Support\Facades\Validator;
use App\Models\Customer;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


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
            $emailData = [
                'name' => $data['firstname'] . ' ' . $data['lastname'],
                'email' => $data['email'],
                'phone' => $data['phone'],
                'role' => $data['role'],
            ];


            // Send email to user
            Mail::to($data['email'])->send(new RegisterEmail($emailData));

            // Send to admin
            Mail::to('travelbroindia1@gmail.com')->send(new AdminRegisterNotification($data));

            session()->flash('success', 'Registration Successfully Done. Please Check Your Email');
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
   public function profileView()
{
    $user = (array) session('userData'); // Cast stdClass to array
    return view('vendorDashboard.edit-vendor-profile', compact('user'));
}

    public function profileUpdate(Request $request)
    {
        $user = session('userData');

        if (!$user) {
            return redirect()->route('login')->with('error', 'Session expired. Please log in again.');
        }

        $customer = Customer::find($user->id); 

        $data = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:customers,email,' . $customer->id,
            'phone' => 'nullable|string|max:20',
            'password' => 'nullable',
            'image' => 'nullable|image|max:2048',
            'file' => 'nullable|file|max:2048',
        ]);

        if ($request->filled('password')) {
            $data['password'] = $request->password;
        } else {
            unset($data['password']);
        }

        if ($request->hasFile('image')) {
            if ($customer->image && Storage::disk('public')->exists($customer->image)) {
                Storage::disk('public')->delete($customer->image);
            }
            $data['image'] = $request->file('image')->store('profile_photos', 'public');
        }

        if ($request->hasFile('file')) {
            if ($customer->file && Storage::disk('public')->exists($customer->file)) {
                Storage::disk('public')->delete($customer->file);
            }
            $data['file'] = $request->file('file')->store('id_proofs', 'public');
        }

        $customer->update($data);

        // Update session data with new values
        session(['userData' => $customer]);

        return redirect()->route('vendorDashboard.edit-profile')->with('success', 'Profile updated successfully.');
    }
}
