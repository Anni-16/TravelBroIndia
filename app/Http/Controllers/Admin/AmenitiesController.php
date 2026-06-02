<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\AmenitiesType;
use App\Models\Amenities;
use Illuminate\Support\Str;

class AmenitiesController extends Controller
{

    /* ======================================================================
            Manage  Amenities Type Functions 
   ======================================================================
*/
    public function AmenitiesType()
    {
        $amenitiestype = AmenitiesType::orderBy('id', 'desc')->get();
        return view('admin.amenities-type', [
            'amenitiestype' => $amenitiestype
        ]);
    }

    public function AddAmenities()
    {
        return view('admin.add-amenities-type');
    }

    public function AddAmenitiesStore(Request $request)
    {
        $rules = [
            'name' => 'required|string|max:255',
            'status' => 'nullable|in:0,1'
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->route('admin.add-amenities-type')->withInput()->withErrors($validator);
        }

        $amenitiestype = new AmenitiesType();
        $amenitiestype->name = $request->name;
        $amenitiestype->slug = Str::slug($request->name);
        $amenitiestype->status = $request->status;
        $amenitiestype->save();

        return redirect()->route('admin.amenities-type')->with('success', 'Amenities Category Added Successfully.');
    }

    public function EditAmenities($id)
    {
        $amenitiestype = AmenitiesType::findOrFail($id);
        return view('admin.edit-amenities-type', [
            'amenitiestype' => $amenitiestype
        ]);
    }

    public function UpdateAmenities($id, Request $request)
    {
        $amenitiestype = AmenitiesType::findOrFail($id);

        $rules = [
            'name' => 'required|string|max:255',
            'status' => 'nullable|in:0,1'
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->route('admin.edit-amenities-type', $amenitiestype->id)
                ->withInput()
                ->withErrors($validator);
        }

        $amenitiestype->name = $request->name;
        $amenitiestype->status = $request->status;
        $amenitiestype->slug = Str::slug($request->name);
        $amenitiestype->save();

        return redirect()->route('admin.amenities-type')->with('success', 'Amenities Category Updated Successfully.');
    }

    public function AmenitiesDestroy($id)
    {
        $amenitiestype = AmenitiesType::findOrFail($id);
        $amenitiestype->delete();
        return redirect()->route('admin.amenities-type')->with('success', 'Amenities Category Deleted Successfully.');
    }

      /* ======================================================================
            Manage Amenities Functions
   ======================================================================
*/

    public function Amenities()
    {
        $amenities = Amenities::with('category')->orderBy('id', 'desc')->get();
        return view('admin.amenities', [
            'amenities' => $amenities
        ]);
    }

    public function AmenitiesAdd()
    {
        $amenitiesTypes = AmenitiesType::where('status', 1)->get();
        return view('admin.add-amenities', compact('amenitiesTypes'));
    }

    public function AmenitiesStore(Request $request)
    {
        $rules = [
            'name' => 'required|string|max:255',
            'status' => 'nullable|in:0,1',
            'amenities_type_id' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->route('admin.add-amenities')->withInput()->withErrors($validator);
        }

        $amenities = new Amenities();
        $amenities->name = $request->name;
        $amenities->slug = Str::slug($request->name);
        $amenities->status = $request->status;
        $amenities->amenities_type_id = $request->amenities_type_id;
        $amenities->save();

        return redirect()->route('admin.amenities')->with('success', 'Amenities Added Successfully.');
    }

    public function AmenitiesEdit($id)
    {
        $amenities = Amenities::findOrFail($id); // ✅ renamed from $amenitie
        $amenitiesTypes = AmenitiesType::where('status', 1)->orderBy('name')->get();
        return view('admin.edit-amenities', compact('amenities', 'amenitiesTypes')); // ✅ passed correct name
    }

    public function AmenitiesUpdated($id, Request $request)
    {
        $amenities = Amenities::findOrFail($id);

        $rules = [
            'name' => 'required|string|max:255',
            'status' => 'nullable|in:0,1',
            'amenities_type_id' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->route('admin.edit-amenities', $amenities->id)
                ->withInput()
                ->withErrors($validator);
        }

        $amenities->name = $request->name;
        $amenities->slug = Str::slug($request->name);
        $amenities->status = $request->status;
        $amenities->amenities_type_id = $request->amenities_type_id;
        $amenities->save();

        return redirect()->route('admin.amenities')->with('success', 'Amenities Updated Successfully.');
    }

    public function AmenitiesDelete($id)
    {
        $amenities = Amenities::findOrFail($id);
        $amenities->delete();
        return redirect()->route('admin.amenities')->with('success', 'Amenities Deleted Successfully.');
    }

}
