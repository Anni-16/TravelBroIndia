<?php

namespace App\Http\Controllers\vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Customer;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class listingController extends Controller
{
    protected $Customer;
    public function __construct()
    {
        $this->Customer = new Customer;
    }

    // Vendor And Customer Register function
    public function listingIndex()
    {
        return view('vendorDashboard.add-hotel-listing');
    }

    public function addHotel(Request $request)
    {       

        // Begin transaction
        DB::beginTransaction();

        try {
            // Decode input data
            $basics = json_decode($request->input('basics'), true);
            $description = json_decode($request->input('description'), true);
            $details = json_decode($request->input('details'), true);
            $location = json_decode($request->input('location'), true);
            $amenities = json_decode($request->input('amenities'), true);
            $pricing = json_decode($request->input('pricing'), true);
            $booking = json_decode($request->input('booking'), true);
            $userID = session('userData')->user_id;
            $hotelID = Str::random(10);

            // Insert basics data
            $basicData = [
                'user_id' => $userID,
                'hotel_id' => $hotelID,
                'property_type' => $basics['property_type'] ?? "",
                'room_type' => $basics['room_type'] ?? "",
                'accomdates' => $basics['accomdates'] ?? "",
                'bedrooms' => $basics['bedrooms'] ?? "",
            ];
            $this->Customer->insertBasicData($basicData);

            // Insert all rooms data
            foreach ($basics['all_beds'] as $v) {
                $allrooms = [
                    'user_id' => $userID,
                    'hotel_id' => $hotelID,
                    'king' => $v['king'] ?? "",
                    'queen' => $v['queen'] ?? "",
                    'double_type' => $v['double'] ?? "",
                    'sofa_bed' => $v['sofa_bed'] ?? "",
                    'single' => $v['single'] ?? "",
                    'bunk_bed' => $v['bunk_bed'] ?? "",
                ];
                $this->Customer->insertAllrooms($allrooms);
            }

            // Insert description data
            $descriptionData = [
                'user_id' => $userID,
                'hotel_id' => $hotelID,
                'listing_name' => $description['listing_name'] ?? "",
                'summary' => $description['message'] ?? "",
            ];
            $this->Customer->insertDescriptionData($descriptionData);
            
            // Insert detail data
            $detailData = [
                'user_id' => $userID,
                'hotel_id' => $hotelID,
                'about_place' => $details['about_place'] ?? "",
                'great_place' => $details['great_place'] ?? "",
                'guest_place' => $details['guest_place'] ?? "",
                'guest_interect' => $details['guest_interect'] ?? "",
                'other_things' => $details['other_things'] ?? "",
                'other_things1' => $details['other_things1'] ?? "",
                'around_things' => $details['around_things'] ?? "",
            ];
            $this->Customer->insertDetailData($detailData);
            
            // Insert location data
            $locationData = [
                'user_id' => $userID,
                'hotel_id' => $hotelID,
                'country' => $location['country'] ?? "",
                'address1' => $location['address1'] ?? "",
                'address2' => $location['address2'] ?? "",
                'city' => $location['city'] ?? "",
                'state' => $location['state'] ?? "",
                'pin_code' => $location['pinCode'] ?? "",
            ];
            $this->Customer->insertLocationData($locationData);
            
            // Insert amenities data
            $amenitiesData = [
                'user_id' => $userID,
                'hotel_id' => $hotelID,
                'safety_amenities' => implode(', ', $amenities['safety_amenities']),
                'common_amentities' => implode(', ', $amenities['common_amentities']),
            ];
            $this->Customer->insertAmenitiesData($amenitiesData);

            // Insert pricing data
            $pricingData = [
                'user_id' => $userID,
                'hotel_id' => $hotelID,
                'price' => $pricing['price'] ?? "",
                'currency' => $pricing['currency'] ?? "",
                'additional_pricing' => implode(', ', $pricing['additional_pricing'] ?? ""),
            ];
            $this->Customer->insertPricingData($pricingData);

            // Insert booking data
            $bookingData = [
                'user_id' => $userID,
                'hotel_id' => $hotelID,
                'booking_type_terms' => $booking['booking_type_terms'] ?? "",
                'policy' => $booking['policy'] ?? "",
                'booking_type' => $booking['booking_type'] ?? "",
                'per_hour' => $booking['per_hour'] ?? "",
                'check_out' => $booking['check_out'] ?? "",
                'check_in' => $booking['check_in'] ?? "",
            ];
            $this->Customer->insertBookingData($bookingData);

            // Handle the image files
            $imageName = [];
            if ($request->hasFile('image_files')) {
                foreach ($request->file('image_files') as $file) {
                    $imageName[] = $file->getClientOriginalName();
                    // Store the file in the 'images' directory
                    $file->move(public_path('images'), $file->getClientOriginalName());
                }
            }

            // Handle the video files
            $videoName = [];
            if ($request->hasFile('video_files')) {
                foreach ($request->file('video_files') as $file) {
                    $videoName[] = $file->getClientOriginalName();
                    // Store the file in the 'videos' directory
                    $file->move(public_path('videos'), $file->getClientOriginalName());
                }
            }

            // Insert photo data
            $photoData = [
                'user_id' => $userID,
                'hotel_id' => $hotelID,
                'images' => implode(', ', $imageName),
                'videos' => implode(', ', $videoName),
            ];
            $this->Customer->insertPhotoData($photoData);

            // Commit the transaction
            DB::commit();

            $response = [
                'status' => true,
                'message' => "Data inserted successfully!",
            ];
            return response()->json($response, 200);
        } catch (\Exception $e) {
            // If any exception occurs, rollback the transaction
            DB::rollBack();

            $response = [
                'status' => false,
                'message' => "Something went wrong, try again!",
            ];
            return response()->json($response, 500);
        }
    }
}
