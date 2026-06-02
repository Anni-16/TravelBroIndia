<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AboutUs extends Model
{
    use HasFactory;

    protected $table = 'about';

    protected $fillable = [
        'name',
        'heading',
        'image',
        'alt_tag',
        'short_content',
        'content',
        'meta_title',
        'meta_keyword',
        'meta_description',
        'slug'
    ];

}
