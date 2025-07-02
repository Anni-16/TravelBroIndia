<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Customer extends Model
{
    public function register($data){
    $data = DB::table('customers')
            ->insert($data);
    return $data;
   }


   public function login($data)
   {
       $exists = DB::table('customers')
           ->where('email', '=',  $data['email'])
           ->where('password', '=', $data['password'])
           ->where('role', '=', $data['role'])
           ->exists();
       if ($exists) {
           $newdata  = DB::table('customers')
               ->where('email', '=',  $data['email'])
               ->where('password', '=', $data['password'])
               ->where('role', '=', $data['role'])
               ->first();
       } else {
           $newdata = [];
       }
       return $newdata;
   }

   public function insertBasicData($data)
   {
       $status = DB::table('htl_basic_data')
           ->insert($data);
       return $status;
   }

   public function insertAllrooms($data)
   {
       $status = DB::table('htl_room_data')
           ->insert($data);
       return $status;
   }

   public function insertDescriptionData($data)
   {
       $status = DB::table('htl_description_data')
           ->insert($data);
       return $status;
   }

   public function insertDetailData($data)
   {
       $status = DB::table('htl_detail_data')
           ->insert($data);
       return $status;
   }

   public function insertLocationData($data)
   {
       $status = DB::table('htl_location_data')
           ->insert($data);
       return $status;
   }

   public function insertAmenitiesData($data)
   {
       $status = DB::table('htl_amenities_data')
           ->insert($data);
       return $status;
   }

   public function insertPricingData($data)
   {
       $status = DB::table('htl_pricing_data')
           ->insert($data);
       return $status;
   }

   public function insertBookingData($data)
   {
       $status = DB::table('htl_booking_data')
           ->insert($data);
       return $status;
   }

   public function insertPhotoData($data)
   {
       $status = DB::table('htl_photo_data')
           ->insert($data);
       return $status;
   }
}