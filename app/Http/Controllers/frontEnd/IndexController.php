<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Blogs;


class IndexController extends Controller
{
    public function IndexPage()
    {

        // For Blog Section 
        $blogs = Blogs::where('status', 'Active')
            ->orderBy('created_at', 'desc')->limit(9)
            ->get();

        foreach ($blogs as $blog) {
            // 1. Strip HTML tags
            $cleanContent = strip_tags($blog->content);
            // 2. Decode HTML entities like &nbsp;
            $cleanContent = html_entity_decode($cleanContent);
            // 3. Limit to 50 words
            $blog->content = Str::words($cleanContent, 15, '...');

            // For Date
            $blog->formatted_date = $blog->created_at->format('d M Y');
        }

        return view('welcome', compact('blogs'));
    }
}
