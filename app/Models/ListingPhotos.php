<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListingPhotos extends Model
{
    use HasFactory;

    protected $table = 'listing_photos';

    protected $fillable = [
        'user_id',
        'hotel_id',
        'photo',
        'multi_photo',
        'video_link',
    ];

    protected $casts = [
        'multi_photo' => 'array', // Handles JSON
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
