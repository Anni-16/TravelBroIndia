<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\AmenitiesType;
use App\Models\Amenities;


class AmenitiesController extends Controller
{

     // Function of Amenities Type Start

        // This Method will Show amenities type page
    public function AmenitiesType(){
        $amenitiestype = AmenitiesType::orderBy('id', 'desc')->get();
          return view('admin.amenities-type',[
            'amenitiestype' => $amenitiestype
          ]);    
      }

      // This Method will Show manage create amenities type page
    public function AddAmenities(){
        return view('admin.add-amenities-type');
    }
    
    // This Method will Show Store manage amenities type  in database
    public function AddAmenitiesStore(Request $request){
        // Validation rules
    $rules = [
        'name' => 'required',
        'description' => 'required',
    ];

    $validator = Validator::make($request->all(), $rules);

    if ($validator->fails()) {
        return redirect()->route('admin.add-amenities-type')->withInput()->withErrors($validator);
    }

    // Create a new amenities types instance
    $amenitiestype = new AmenitiesType();
    $amenitiestype->name = $request->name;
    $amenitiestype->description = $request->description;

    $amenitiestype->save();

    return redirect()->route('admin.amenities-type')->with('success', 'Amenities Type Added Successfully.');
}

// This Method will Show Edit  a Amenities Type
public function EditAmenities($id){
    $amenitiestype = AmenitiesType::findOrFail($id);
    return view('admin.edit-amenities-type',[
        'amenitiestype' => $amenitiestype
    ]);
}
// This Method will Show Updated a Amenities type
public function UpdateAmenities($id,Request $request){
    $amenitiestype = AmenitiesType::findOrFail($id);

    // Validation rules
    $rules = [
        'name' => 'required',
        'description' => 'required',
    ];

    $validator = Validator::make($request->all(), $rules);
    if ($validator->fails()) {
        \Log::error('Validation failed:', $validator->errors()->toArray());
        return redirect()->route('admin.edit-amenities-type', $amenitiestype->id)
            ->withInput()
            ->withErrors($validator);
    }

    // Update amenities types instance
    $amenitiestype->name = $request->name;
    $amenitiestype->description = $request->description;

    $amenitiestype->save();

    return redirect()->route('admin.amenities-type')->with('success', 'Amenities Type Updated Successfully.');
}
 // This Method will Show delete a manage user
 public function AmenitiesDestroy($id){
        
    $amenitiestype = AmenitiesType::findOrFail($id);

    // delete Amenities Type from database
    $amenitiestype->delete();
    return redirect()->route('admin.amenities-type')->with('success', 'Amenities Type Deleted Successfully.');

}


// Functions Of Amenities Type End




// Function Of Amenities Start

 // This Method will Show amenities type page
 public function Amenities(){
    $amenities = Amenities::orderBy('id', 'desc')->get();
      return view('admin.amenities',[
        'amenities' => $amenities
      ]);  
  }
  
  // This Method will Show manage create amenities type page
  public function AmenitiesAdd(){
    return view('admin.add-amenities');
  }
 // This Method will Show Store manage amenities type  in database
 public function AmenitiesStore(Request $request){
    // Validation rules
$rules = [
    'name' => 'required',
    'description' => 'required',
    'icon' => 'required',
    'amenities_type_id' => 'required',
];

$validator = Validator::make($request->all(), $rules);

if ($validator->fails()) {
    return redirect()->route('admin.add-amenities')->withInput()->withErrors($validator);
}

// Create a new amenities types instance
$amenities = new Amenities();
$amenities->name = $request->name;
$amenities->description = $request->description;
$amenities->icon = $request->icon;
$amenities->status= $request->status;
$amenities->amenities_type_id= $request->amenities_type_id;
$amenities->save();

return redirect()->route('admin.amenities')->with('success', 'Amenities Added Successfully.');
}

// This Method will Show Edit  a Amenities
public function AmenitiesEdit($id){
    $amenities = Amenities::findOrFail($id);
    return view('admin.edit-amenities',[
        'amenities' => $amenities
    ]);
}
// This Method will Show Updated a Amenities
public function AmenitiesUpdated($id,Request $request){
    $amenities = Amenities::findOrFail($id);

    // Validation rules
    $rules = [
        'name' => 'required',
        'description' => 'required',
        'icon' => 'required',
        'amenities_type_id' => 'required',
    ];

    $validator = Validator::make($request->all(), $rules);
    if ($validator->fails()) {
        \Log::error('Validation failed:', $validator->errors()->toArray());
        return redirect()->route('admin.edit-amenities', $amenities->id)
            ->withInput()
            ->withErrors($validator);
    }

    // Update amenities  instance
    $amenities->name = $request->name;
    $amenities->description = $request->description;
    $amenities->icon = $request->icon;
    $amenities->status= $request->status;
    $amenities->amenities_type_id= $request->amenities_type_id;
    $amenities->save();

    return redirect()->route('admin.amenities')->with('success', 'Amenities Updated Successfully.');
}
 // This Method will Show delete a Amenities
//  public function AmenitiesDelete($id){
        
//     $amenities = Amenities::findOrFail($id);

//     // delete Amenities from database
//     $amenities->delete();
//     return redirect()->route('admin.amenities')->with('success', 'Amenities Deleted Successfully.');

// }

public function AmenitiesDelete($id)
{
    $amenities = Amenities::find($id);

    if (!$amenities) {
        return redirect()->route('admin.amenities')->with('error', 'Amenities Not Found!');
    }

    $amenities->delete();
    return redirect()->route('admin.amenities')->with('success', 'Amenities Deleted Successfully.');
}


// Function Of Amenities End
}