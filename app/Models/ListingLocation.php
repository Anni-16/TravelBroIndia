<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ListingLocation extends Model
{
    use HasFactory;

    protected $table = 'listing_locations';

    protected $fillable = [
        'user_id',
        'hotel_id',
        'address1',
        'address2',
        'city',
        'state',
        'pinCode',
        'map_url',
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
}
