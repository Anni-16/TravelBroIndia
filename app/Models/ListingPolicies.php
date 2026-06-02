<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class ListingPolicies extends Model
{
    use HasFactory;

    protected $table = 'listing_policies';

    protected $fillable = [
        'user_id',
        'hotel_id',
        'cancel_policy',
        'policy_policy',
        'check_in_time',
        'check_out_time',
        'advance',
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
