<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListingBasic extends Model
{
    use HasFactory;

    protected $table = 'listing_basic';

    protected $fillable = [
        'user_id',
        'hotel_id',
        'hotel_name',
        'hotel_rating',
        'hotel_owner_name',
        'hotel_designation',
        'hotel_primary_no',
        'hotel_alternate_no',
        'hotel_email',
        'hotel_gst_no',
        'slug'
    ];

    // Relation with customer
    public function user()
    {
        return $this->belongsTo(Customer::class, 'user_id');
    }
}
