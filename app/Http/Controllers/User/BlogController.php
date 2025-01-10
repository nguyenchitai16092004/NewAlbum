<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\BLOG;

class BlogController extends Controller
{
    public function Index()
    {
        $blog = BLOG::all();
        $blog = BLOG::paginate(4);
        return view('frontend.pages.blog', compact('blog'));
    }
    public function show($MaBL)
    {
        $blogItem = Blog::where('MaBL', $MaBL)->first();

        if (!$blogItem) {
            abort(404, 'Blog not found');
        }

        return view('frontend.pages.single-blog', compact('blogItem'));
    }
}