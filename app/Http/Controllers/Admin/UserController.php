<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use App\Models\Customer;


class UserController extends Controller
{   
    protected $Users;
    public function __construct(){
        $this->Users = new Customer;
    }
    // This Method will Show manage user page
    public function manageUser(){
      $users= Customer::orderBy('created_at', 'desc')->get();
        return view('admin.manage-user',[
          'users' => $users
        ]);
        // return redirect()->route('admin.manage-user');
    }
    // This Method will Show manage create user page
    public function manageCreate(){
        return view('admin.add-customer');
    }
    // This Method will Show Store manage user in database
    public function manageStore(Request $request)
{
    // Validation rules
    $rules = [
        'firstname' => 'required',
        'email' => 'required|email',
        'phone' => 'required',
        'password' => 'required',
    ];

    // Validate image only if uploaded
    if ($request->hasFile('image')) {
        $rules['image'] = 'image|mimes:jpeg,png,jpg,gif,JPEG,PNG,JPG,GIF|max:2048'; // Allow only images, max size 2MB
    }

    $validator = Validator::make($request->all(), $rules);

    if ($validator->fails()) {
        return redirect()->route('admin.add-customer')->withInput()->withErrors($validator);
    }

    $lastUser = Customer::latest()->first();
    $nextNumber = $lastUser ? (intval(substr($lastUser->user_id, -2)) + 1) : 1;
    $userId = 'USER-' . str_pad($nextNumber, 2, '0', STR_PAD_LEFT);

    // Create a new user instance
    $users = new Customer();
    $users->user_id = $userId;
    $users->firstname = $request->firstname;
    $users->lastname = $request->lastname;
    $users->email = $request->email;
    $users->phone = $request->phone;
    $users->password = $request->password; 
    $users->role = $request->role;
    $users->status = $request->status;

    // Handle Image Upload
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $ext = $image->getClientOriginalExtension();
        $imageName = time() . '.' . $ext;
        $image->move(public_path('Uploads/user/'), $imageName);
        $users->image = $imageName;
    }

    $users->save();

    return redirect()->route('admin.manage-user')->with('success', 'Customer Added Successfully.');
}
    // This Method will Show Edit  a manage user
    public function manageEdit($id){
        $users = Customer::findOrFail($id);
        return view('admin.edit-customer',[
            'users' => $users
        ]);
    }
    // This Method will Show Updated a manage user 
    public function manageUpdate($id, Request $request) {
        $users = Customer::findOrFail($id);
    
        // Validation rules
        $rules = [
            'firstname' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'password' => 'nullable|', // Make password optional
        ];
    
        if ($request->hasFile('image')) {
            $rules['image'] = 'image|mimes:jpeg,png,jpg,gif,JPEG,PNG,JPG,GIF|max:2048';
        }
    
        $validator = Validator::make($request->all(), $rules);
    
        if ($validator->fails()) {
            \Log::error('Validation failed:', $validator->errors()->toArray());
            return redirect()->route('admin.edit-customer', $users->id)
                ->withInput()
                ->withErrors($validator);
        }
    
        // Update user details
        $users->firstname = $request->firstname;
        $users->lastname = $request->lastname;
        $users->email = $request->email;
        $users->phone = $request->phone;
    
        if (!empty($request->password)) {
            $users->password = $request->password;
        }
    
        $users->role = $request->role;
        $users->status = $request->status;
    
        // Handle Image Upload
        if ($request->hasFile('image')) {
            if ($users->image) {
                $oldImagePath = public_path('Uploads/user/' . $users->image);
                if (File::exists($oldImagePath)) {
                    File::delete($oldImagePath);
                }
            }
    
            if (!file_exists(public_path('Uploads/user'))) {
                mkdir(public_path('Uploads/user'), 0777, true);
            }
    
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('Uploads/user/'), $imageName);
            $users->image = $imageName;
        }
    
        $users->save();
    
        return redirect()->route('admin.manage-user')->with('success', 'Customer Updated Successfully.');
    }
    
    // This Method will Show delete a manage user
    public function manageDestroy($id){
        
        $users = Customer::findOrFail($id);

        // Delete the image file if it exists
        if ($users->image) {
            $oldImagePath = public_path('Uploads/user/' . $users->image);
            if (File::exists($oldImagePath)) {
                File::delete($oldImagePath);
            }
        }

        // delete User from database
        $users->delete();
        return redirect()->route('admin.manage-user')->with('success', 'Customer Deleted Successfully.');

    }

    // This method use for data fecth form user table and show in add listing section
    public function getUsers(){
        $users = $this->Users->allUsers();
        if($users){
            $data = $users;
        }else{
            $data = [];
        }
        return view('admin.add-properties', ['data' =>$data]);
    }
}