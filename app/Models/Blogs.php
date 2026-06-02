<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Blogs extends Model
{
    use HasFactory;

    protected $table = 'blog';

    protected $fillable = [
        'author_name',
        'blog_name',
        'image',
        'alt_tag',
        'content',
        'meta_title',
        'meta_keyword',
        'meta_description',
        'status',
        'slug'
    ];

}
