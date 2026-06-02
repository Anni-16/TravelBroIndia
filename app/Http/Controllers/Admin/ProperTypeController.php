<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\PropertyCategory;
use App\Models\RoomType;
use Illuminate\Support\Str;

class ProperTypeController extends Controller
{

/* ======================================================================
            Manage Property Category  Functions
   ======================================================================
*/

  // This Method will Show property type page
  public function PropertyType()
  {
    $propertyType = PropertyCategory::orderBy('id', 'desc')->get();
    return view('admin.property-type', [
      'propertyType' => $propertyType
    ]);
  }

  // This Method will Show manage create Property type page
  public function AddProperty()
  {
    return view('admin.add-property-type');
  }

  // This method stores a new property type in the database
  public function AddPropertyStore(Request $request)
  {
    $rules = [
      'name' => 'required|string|max:255',
      'status' => 'nullable|in:0,1'
    ];

    $validator = Validator::make($request->all(), $rules);

    if ($validator->fails()) {
      return redirect()->route('admin.add-property-category')
        ->withInput()
        ->withErrors($validator);
    }

    $propertyType = new PropertyCategory();
    $propertyType->name = $request->input('name');

    // Generate slug
    $propertyType->slug = Str::slug($request->input('name')); 

    $propertyType->status = $request->input('status', 1);
    $propertyType->save();

    return redirect()->route('admin.property-category')
      ->with('success', 'Property Category added successfully.');
  }
  // This Method will Show Edit  a Property Type
  public function EditProperty($id)
  {
    $propertyType = PropertyCategory::findOrFail($id);
    return view('admin.edit-property-type', [
      'propertyType' => $propertyType
    ]);
  }

  // This Method will Show Updated a Property type
  public function UpdateProperty($id, Request $request)
  {
    $propertyType = PropertyCategory::findOrFail($id);

    // Validation rules
    $rules = [
      'name' => 'required|string|max:255',
      'status' => 'nullable|in:0,1'
    ];

    $validator = Validator::make($request->all(), $rules);
    if ($validator->fails()) {
      \Log::error('Validation failed:', $validator->errors()->toArray());
      return redirect()->route('admin.edit-property-type', $propertyType->id)
        ->withInput()
        ->withErrors($validator);
    }

    // Update Prperty types instance
    $propertyType->name = $request->name;
    $propertyType->status = $request->status;

    // Generate slug from name
    $propertyType->slug = Str::slug($request->name);

    $propertyType->save();

    return redirect()->route('admin.property-category')->with('success', 'Property categories Updated Successfully.');
  }

   // This Method will Show delete a Property Type
   public function PropertyDestroy($id)
   {

       $propertyType = PropertyCategory::findOrFail($id);

       // delete Property Type from database
       $propertyType->delete();
       return redirect()->route('admin.property-category')->with('success', 'Property Category Deleted Successfully.');
   }


/* ======================================================================
            Manage Romms Types  Functions
   ======================================================================
*/

  // This Method will Show Room type page
  public function RoomType()
  {
    $roomtype = RoomType::orderBy('id', 'desc')->get();
    return view('admin.rooms-type', [
      'roomtype' => $roomtype
    ]);

    // return view('admin.rooms-type');
  }

  // This Method will Show manage create Room type page
  public function AddRoom()
  {
    return view('admin.add-rooms-type');
  }

  // This method stores a new Room type in the database
  public function AddRoomStore(Request $request)
  {
    $rules = [
      'name' => 'required|string|max:255',
      'status' => 'nullable|in:0,1'
    ];

    $validator = Validator::make($request->all(), $rules);

    if ($validator->fails()) {
      return redirect()->route('admin.add-rooms-type')
        ->withInput()
        ->withErrors($validator);
    }

    $roomtype = new RoomType();
    $roomtype->name = $request->input('name');

    // Generate slug
    $roomtype->slug = Str::slug($request->input('name')); 

    $roomtype->status = $request->input('status', 1);
    $roomtype->save();

    return redirect()->route('admin.rooms-type')
      ->with('success', 'Rooms Type added successfully.');
  }
  // This Method will Show Edit  a Room Type
  public function EditRoom($id)
  {
    $roomtype = RoomType::findOrFail($id);
    return view('admin.edit-rooms-type', [
      'roomtype' => $roomtype
    ]);
  }

  // This Method will Show Updated a Property type
  public function UpdateRoom($id, Request $request)
  {
    $roomtype = RoomType::findOrFail($id);

    // Validation rules
    $rules = [
      'name' => 'required|string|max:255',
      'status' => 'nullable|in:0,1'
    ];

    $validator = Validator::make($request->all(), $rules);
    if ($validator->fails()) {
      \Log::error('Validation failed:', $validator->errors()->toArray());
      return redirect()->route('admin.edit-rooms-type', $roomtype->id)
        ->withInput()
        ->withErrors($validator);
    }

    // Update Prperty types instance
    $roomtype->name = $request->name;
    $roomtype->status = $request->status;

    // Generate slug from name
    $roomtype->slug = Str::slug($request->name);

    $roomtype->save();

    return redirect()->route('admin.rooms-type')->with('success', 'Rooms Type Updated Successfully.');
  }

   // This Method will Show delete a Property Type
   public function RoomDestroy($id)
   {

       $roomtype = RoomType::findOrFail($id);

       // delete Property Type from database
       $roomtype->delete();
       return redirect()->route('admin.rooms-type')->with('success', 'Rooms Type Deleted Successfully.');
   }


  }

