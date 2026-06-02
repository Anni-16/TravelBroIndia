<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AmenitiesType extends Model
{
    protected $table = 'amenities_types';

    public function amenities()
    {
        return $this->hasMany(Amenities::class, 'amenities_type_id', 'id')
            ->where('status', 1)
            ->orderBy('name');
    }
}
