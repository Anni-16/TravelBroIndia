<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ListingPricing extends Model
{
    use HasFactory;

    protected $table = 'listing_pricings';

    protected $fillable = [
        'user_id',
        'hotel_id',
        'price',
        'currency',
        'extra_guests',
        'festive_rates',
        'group_discount',
    ];

    public function user()
    {
        return $this->belongsTo(Customer::class, 'user_id');
    }

    public function listingBasic()
    {
        return $this->belongsTo(ListingBasic::class, 'hotel_id', 'hotel_id');
    }
}
