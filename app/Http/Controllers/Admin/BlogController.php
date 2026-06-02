<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File; 
use Illuminate\Support\Str;
use App\Models\Blogs;

class BlogController extends Controller
{
    // This Method will Show Manage Blogs page
    public function blog()
    {
        $blogs = Blogs::orderBy('id', 'desc')->get();

        foreach ($blogs as $blog) {
            // 1. Strip HTML tags
            $cleanContent = strip_tags($blog->content);
            // 2. Decode HTML entities like &nbsp;
            $cleanContent = html_entity_decode($cleanContent);
            // 3. Limit to 50 words
            $blog->content = Str::words($cleanContent, 10, '...');
            // for Date
            $blog->formatted_date = $blog->created_at->format('d M Y');

        }

        return view('admin.manage-blog', compact('blogs'));
    }

    // This Method will Show Add Blogs page
    public function AddBlog()
    {
        return view('admin.add-blog');
    }

    // This Method Will Add Blogs Data In Database
    public function BlogStore(Request $request)
    {
        // Validation rules
        $request->validate([
            'author_name'       => 'required|string',
            'blog_name'         => 'required|string',
            'image'             => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'alt_tag'           => 'required|string',
            'content'           => 'required|string',
            'meta_title'        => 'required|string',
            'meta_keyword'      => 'required|string',
            'meta_description'  => 'nullable|string',
            'status'            => 'required|in:Active,Inactive',
        ]);

        // Create new blog instance
        $blog = new Blogs();
        $blog->author_name      = $request->author_name;
        $blog->blog_name        = $request->blog_name;
        $blog->alt_tag          = $request->alt_tag;
        $blog->content          = $request->content;
        $blog->meta_title       = $request->meta_title;
        $blog->meta_keyword     = $request->meta_keyword;
        $blog->meta_description = $request->meta_description;
        $blog->status           = $request->status;
        $blog->slug             = Str::slug($request->blog_name);

        // Handle image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('Uploads/blog/'), $imageName);
            $blog->image = $imageName;
        }

        // Save to database
        $blog->save();

        return redirect()->route('admin.manage-blog')->with('success', 'Blog added successfully.');
    }

    // This Method will Show Edit Blogs page
    public function BlogEdit($id)
    {
        $blog = Blogs::findOrFail($id);
        return view('admin.edit-blog', compact('blog'));
    }

    // Handle Update
    public function BlogUpdated(Request $request, $id)
    {
        $request->validate([
            'author_name'       => 'required|string',
            'blog_name'         => 'required|string',
            'image'             => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'alt_tag'           => 'required|string',
            'content'           => 'required|string',
            'meta_title'        => 'required|string',
            'meta_keyword'      => 'required|string',
            'meta_description'  => 'nullable|string',
            'status'            => 'required|in:Active,Inactive',
        ]);

        $blog = Blogs::findOrFail($id);

        $blog->author_name      = $request->author_name;
        $blog->blog_name        = $request->blog_name;
        $blog->alt_tag          = $request->alt_tag;
        $blog->content          = $request->content;
        $blog->meta_title       = $request->meta_title;
        $blog->meta_keyword     = $request->meta_keyword;
        $blog->meta_description = $request->meta_description;
        $blog->status           = $request->status;
        $blog->slug             = Str::slug($request->blog_name);

        // Handle image upload
        if ($request->hasFile('image')) {
            if ($blog->image && file_exists(public_path('Uploads/blog/' . $blog->image))) {
                unlink(public_path('Uploads/blog/' . $blog->image));
            }

            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('Uploads/blog/'), $imageName);
            $blog->image = $imageName;
        }

        $blog->save();

        return redirect()->route('admin.manage-blog')->with('success', 'Blog updated successfully.');
    }

        // This Method will Show delete a manage user
        public function BlogDestroy($id)
        {
    
            $blog = Blogs::findOrFail($id);
    
            // Delete the image file if it exists
            if ($blog->image) {
                $oldImagePath = public_path('Uploads/blog/' . $blog->image);
                if (File::exists($oldImagePath)) {
                    File::delete($oldImagePath);
                }
            }
    
            // delete User from database
            $blog->delete();
            return redirect()->route('admin.manage-blog')->with('success', 'Blog Deleted Successfully.');
        }
    
}
