<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Amenities extends Model
{
    protected $fillable = ['name', 'amenities_type_id', 'status'];

    public function category()
    {
        return $this->belongsTo(AmenitiesType::class, 'amenities_type_id');
    }
}

