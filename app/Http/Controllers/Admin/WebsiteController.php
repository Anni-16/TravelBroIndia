<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SocialMedia;


class WebsiteController extends Controller
{
    // Show form with old data Social Media
    public function SocialMedia()
    {
        // Fetch all saved social media links as key => value
        $socials = SocialMedia::pluck('link', 'name')->toArray();

        return view('admin.social-media', compact('socials'));
    }

    // Store / Update specific link Social Media
    public function SocialMediaStore(Request $request)
    {
        $platforms = ['facebook', 'twitter', 'linkedin', 'pinterest', 'youtube', 'instagram'];

        foreach ($platforms as $platform) {
            if ($request->filled($platform)) {
                SocialMedia::updateOrCreate(
                    ['name' => $platform],
                    ['link' => $request->$platform]
                );
            }
        }

        return redirect()->route('admin.social-media')->with('success', 'Social media links updated successfully!');
    }

    // Show Manage CMS Page 
    public function ManageCMS()
    {
        return view('admin.manage-cms');
    }

    // Show Manage CMS About Us Page
    public function AboutUsEdit(){

    }
}
