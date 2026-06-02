<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;
use App\Models\ListingBasic;
use App\Models\ListingDescription;
use App\Models\Customer;
use App\Models\ListingLocation;
use App\Models\ListingAmenities;
use App\Models\ListingPhotos;
use App\Models\ListingPricing;
use App\Models\ListingPolicies;
use App\Models\PropertyCategory;
use App\Models\RoomType;
use App\Models\Amenities;
use App\Models\AmenitiesType;

class ListingController extends Controller
{
    // Show manage listing page
    public function manageListing()
    {
        $listings = ListingBasic::orderBy('created_at', 'desc')->get();
        return view('admin.manage-listing', compact('listings'));
    }


    // ================== VIEW METHODS ==================

    // Show add Listing Basic Details page
    public function addListingBasic()
    {
        // Fetch active customers (status = Active)
        $users = Customer::where('status', 'Active')
            ->orderBy('firstname', 'asc')
            ->orderBy('lastname', 'asc')
            ->get();

        return view('admin.add-list-basic', compact('users'));
    }


    // Show add Listing Description Details page
    public function addListingDescription()
    {
        $propertyType = PropertyCategory::where('status', 1)->orderBy('name')->get();
        $roomType = RoomType::where('status', 1)->orderBy('name')->get();

        // Get from session
        $userId = session('user_id');
        $hotelId = session('hotel_id');

        // Check session
        if (!$userId || !$hotelId) {
            return redirect()->route('admin.add-list-basic')->with('error', 'Session expired. Please start again.');
        }

        return view('admin.add-list-description', compact('propertyType', 'roomType', 'userId', 'hotelId'));
    }

    // Show add Listing Location Details page
    public function addListingLocation()
    {
        // Get from session
        $userId = session('user_id');
        $hotelId = session('hotel_id');

        // Check session
        if (!$userId || !$hotelId) {
            return redirect()->route('admin.add-list-description')->with('error', 'Session expired. Please start again.');
        }

        return view('admin.add-list-location', compact('userId', 'hotelId'));
    }

    // Show add Listing Amenities Details page
    public function addListingAmenities()
    {
        $userId = session('user_id');
        $hotelId = session('hotel_id');

        if (!$userId || !$hotelId) {
            return redirect()->route('admin.add-list-location')
                ->with('error', 'Session expired. Please start again.');
        }

        // Fetch amenities types and their active amenities
        $amenitiesTypes = AmenitiesType::where('status', 1)
            ->with(['amenities' => function ($q) {
                $q->where('status', 1)->orderBy('name');
            }])
            ->orderBy('name')
            ->get();

        return view('admin.add-list-amenities', compact('amenitiesTypes', 'userId', 'hotelId'));
    }

    // Show add Listing Photos Details page
    public function addListingPhotos()
    {
        $userId = session('user_id');
        $hotelId = session('hotel_id');

        if (!$userId || !$hotelId) {
            return redirect()->route('admin.add-list-amenities')
                ->with('error', 'Session expired. Please start again.');
        }

        return view('admin.add-list-photos', compact('userId', 'hotelId'));
    }

    // Show add Listing Pricing Details page
    public function addListingPricing()
    {
        $userId = session('user_id');
        $hotelId = session('hotel_id');

        if (!$userId || !$hotelId) {
            return redirect()->route('admin.add-list-photos')
                ->with('error', 'Session expired. Please start again.');
        }

        return view('admin.add-list-pricing', compact('userId', 'hotelId'));
    }

    // Show add Listing Policies Details page
    public function addListingPolicies()
    {
        $userId = session('user_id');
        $hotelId = session('hotel_id');

        if (!$userId || !$hotelId) {
            return redirect()->route('admin.add-list-pricing')
                ->with('error', 'Session expired. Please start again.');
        }

        return view('admin.add-list-policies', compact('userId', 'hotelId'));
    }


    // ================== Add METHODS ==================

    // Store listing Basic Details Step 1
    public function ListingBasicstore(Request $request)
    {
        $request->validate([
            'user_id'           => 'required|string',
            'hotel_name'        => 'required|string|max:255',
            'hotel_rating'      => 'required|integer|min:1|max:5',
            'hotel_owner_name'  => 'required|string|max:255',
            'hotel_designation' => 'required|string|max:255',
            'hotel_primary_no'  => 'required|digits_between:8,15',
            'hotel_email'       => 'required|email|max:255',
            'hotel_gst_no'      => 'required|string|max:255',
        ]);

        // Generate hotel ID
        $lastHotel = ListingBasic::latest()->first();
        $nextNumber = $lastHotel ? (intval(substr($lastHotel->id, -2)) + 1) : 1;
        $HotelId = 'HOTEL' . str_pad($nextNumber, 3, '0', STR_PAD_LEFT);

        // Save to DB
        ListingBasic::create([
            'user_id'            => $request->user_id,
            'hotel_id'           => $HotelId,
            'hotel_name'         => $request->hotel_name,
            'hotel_rating'       => $request->hotel_rating,
            'hotel_owner_name'   => $request->hotel_owner_name,
            'hotel_designation'  => $request->hotel_designation,
            'hotel_primary_no'   => $request->hotel_primary_no,
            'hotel_alternate_no' => $request->hotel_alternate_no,
            'hotel_email'        => $request->hotel_email,
            'hotel_gst_no'       => $request->hotel_gst_no,
            'slug'               => Str::slug($request->hotel_name),
        ]);

        // Store in session for Step 2
        session([
            'user_id' => $request->user_id,
            'hotel_id' => $HotelId,
        ]);

        return redirect()->route('admin.add-list-description')
            ->with('success', 'Listing basic details saved successfully!');
    }

    // Store listing Description Details Step 2
    public function addListingDescriptionStore(Request $request)
    {
        $userId = session('user_id');
        $hotelId = session('hotel_id');

        if (!$userId || !$hotelId) {
            return redirect()->route('admin.add-list-basic')->with('error', 'Session expired. Please start from Step 1.');
        }

        $request->validate([
            'property_type' => 'required|exists:property_categories,id',
            'room_type'     => 'required|exists:room_types,id',
            'max_guests'    => 'required|string',
            'room_sq_ft'    => 'required|string',
        ]);

        // Optional: Check if already exists
        $exists = ListingDescription::where('user_id', $userId)
            ->where('hotel_id', $hotelId)
            ->exists();

        if ($exists) {
            return redirect()->route('admin.add-list-location')
                ->with('info', 'Listing description already added.');
        }

        ListingDescription::create([
            'user_id'       => $userId,
            'hotel_id'      => $hotelId,
            'property_type' => $request->property_type,
            'room_type'     => $request->room_type,
            'max_guests'    => $request->max_guests,
            'room_sq_ft'    => $request->room_sq_ft,
        ]);

        return redirect()->route('admin.add-list-location')
            ->with('success', 'Listing description details saved successfully!');
    }

    // Store listing Location Details Step 3
    public function addListingLocationStore(Request $request)
    {
        $userId = session('user_id');
        $hotelId = session('hotel_id');

        if (!$userId || !$hotelId) {
            return redirect()->route('admin.add-list-description')->with('error', 'Session expired. Please start from Step 2.');
        }

        // Validate input
        $request->validate([
            'address1'  => 'required|string',
            'address2'  => 'required|string',
            'city'      => 'required|string',
            'state'     => 'required|string',
            'pinCode'   => 'required|string',
            'map_url'   => 'required|string',
        ]);

        // Check if location already exists for this listing
        $exists = ListingLocation::where('user_id', $userId)
            ->where('hotel_id', $hotelId)
            ->exists();

        if ($exists) {
            return redirect()->route('admin.add-list-amenities')
                ->with('info', 'Listing location already added.');
        }

        // Save to DB
        ListingLocation::create([
            'user_id'   => $userId,
            'hotel_id'  => $hotelId,
            'address1'  => $request->address1,
            'address2'  => $request->address2,
            'city'      => $request->city,
            'state'     => $request->state,
            'pinCode'   => $request->pinCode,
            'map_url'   => $request->map_url,
        ]);

        return redirect()->route('admin.add-list-amenities')
            ->with('success', 'Listing location details saved successfully!');
    }

    // Store listing Amenities Details Step 4
    public function addListingAmenitiesStore(Request $request)
    {
        $userId = session('user_id');
        $hotelId = session('hotel_id');

        if (!$userId || !$hotelId) {
            return redirect()->route('admin.add-list-location')
                ->with('error', 'Session expired. Please start from Step 3.');
        }

        $request->validate([
            'amenity_id'   => 'required|array|min:1',
            'amenity_id.*' => 'exists:amenities,id',
        ]);

        // Optionally, clear previous amenities if any (in case user revisits)
        ListingAmenities::where('user_id', $userId)
            ->where('hotel_id', $hotelId)
            ->delete();

        foreach ($request->amenity_id as $amenityId) {
            ListingAmenities::create([
                'user_id'    => $userId,
                'hotel_id'   => $hotelId,
                'amenity_id' => $amenityId,
            ]);
        }

        return redirect()->route('admin.add-list-photos')
            ->with('success', 'Amenities saved successfully!');
    }

    // Store listing Photos Details Step 5
    public function addListingPhotosStore(Request $request)
    {
        $userId = session('user_id');
        $hotelId = session('hotel_id');

        if (!$userId || !$hotelId) {
            return redirect()->route('admin.add-list-amenities')
                ->with('error', 'Session expired. Please start from Step 4.');
        }

        $request->validate([
            'photo' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'multi_photo.*' => 'nullable|image|mimes:jpeg,jpg,png|max:2048',
            'video_link' => 'required|url',
        ]);

        // === Save main photo in public/Uploads/listing_photos
        $photoFile = $request->file('photo');
        $photoName = time() . '_' . $photoFile->getClientOriginalName();
        $photoDestination = public_path('Uploads/listing_photos');
        $photoFile->move($photoDestination, $photoName);

        // === Save multiple photos in public/Uploads/listing_photos/multiple
        $multiPhotosNames = [];

        if ($request->hasFile('multi_photo')) {
            foreach ($request->file('multi_photo') as $file) {
                $fileName = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('Uploads/listing_photos/multiple'), $fileName);
                $multiPhotosNames[] = $fileName;
            }
        }

        // === Save to DB
        ListingPhotos::create([
            'user_id' => $userId,
            'hotel_id' => $hotelId,
            'photo' => $photoName,
            'multi_photo' => json_encode($multiPhotosNames),
            'video_link' => $request->video_link,
        ]);

        return redirect()->route('admin.add-list-pricing')->with('success', 'Photos uploaded successfully!');
    }

    // Store listing Pricing Details Step 6
    // Store listing Pricing Details Step 6
    public function addListingPricingStore(Request $request)
    {
        $userId = session('user_id'); // user selected in step 5
        $hotelId = session('hotel_id'); // hotel ID generated in step 5

        if (!$userId || !$hotelId) {
            return redirect()->route('admin.add-list-photos')
                ->with('error', 'Session expired. Please start from Step 5.');
        }

        $request->validate([
            'price' => 'required|numeric',
            'currency' => 'required|string',
            'extra_guests' => 'nullable|numeric',
            'festive_rates' => 'nullable|string',
            'group_discount' => 'nullable|string',
        ]);

        // Save pricing to listing_pricings table
        ListingPricing::create([
            'user_id' => $userId,
            'hotel_id' => $hotelId,
            'price' => $request->price,
            'currency' => $request->currency,
            'extra_guests' => $request->extra_guests,
            'festive_rates' => $request->festive_rates,
            'group_discount' => $request->group_discount,
        ]);

        // Redirect to step 7
        return redirect()->route('admin.add-list-policies')
            ->with('success', 'Pricing saved successfully!');
    }


    // Store listing Policy Details Step 7
    public function addListingPoliciesStore(Request $request)
    {
        $userId = session('user_id');
        $hotelId = session('hotel_id');

        if (!$userId || !$hotelId) {
            return redirect()->route('admin.add-list-pricing')
                ->with('error', 'Session expired. Please start from Step 6.');
        }

        $request->validate([
            'cancel_policy' => 'required|string',
            'policy_policy' => 'required|string',
            'check_in_time' => 'required',
            'check_out_time' => 'required',
            'advance' => 'nullable|string',
        ]);

        ListingPolicies::create([
            'user_id' => $userId,
            'hotel_id' => $hotelId,
            'cancel_policy' => $request->cancel_policy,
            'policy_policy' => $request->policy_policy,
            'check_in_time' => $request->check_in_time,
            'check_out_time' => $request->check_out_time,
            'advance' => $request->advance,
        ]);

        return redirect()->route('admin.manage-listing')
            ->with('success', 'Hotel Listing saved successfully!');
    }
}
