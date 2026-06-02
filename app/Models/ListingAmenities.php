<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ListingAmenities extends Model
{
    use HasFactory;

    protected $table = 'listing_amenities';

    protected $fillable = [
        'user_id',
        'hotel_id',
        'amenity_id',
    ];

    public function user()
    {
        return $this->belongsTo(Customer::class, 'user_id');
    }

    public function listingBasic()
    {
        return $this->belongsTo(ListingBasic::class, 'hotel_id', 'hotel_id');
    }

    public function amenity()
    {
        return $this->belongsTo(Amenities::class, 'amenity_id');
    }
}
