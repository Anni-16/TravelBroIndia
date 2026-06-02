<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ListingDescription extends Model
{
    use HasFactory;

    protected $table = 'listing_description';

    protected $fillable = [
        'user_id',
        'hotel_id',
        'property_type',
        'room_type',
        'max_guests',
        'room_sq_ft',
    ];

    // Get User Details 
    public function user()
    {
        return $this->belongsTo(Customer::class, 'user_id');
    }
    
    // Get Listing Id
    public function listingBasic()
    {
        return $this->belongsTo(ListingBasic::class, 'hotel_id', 'hotel_id');
    }

    // Get Property Type
    public function propertyType()
    {
        return $this->belongsTo(PropertyCategory::class, 'property_type');
    }

    // Get Room Type
    public function roomType()
    {
        return $this->belongsTo(RoomType::class, 'room_type');
    }
}
