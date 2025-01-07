<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('query');
        if ($query) {
            $blog = Blog::where('TenTG', 'LIKE', "%{$query}%")
                ->orWhere('NoiDung', 'LIKE', "%{$query}%")
                ->paginate(10);
        } else {
            $blog = Blog::paginate(4);
        }
        return view('frontend.pages.blog', compact('blog', 'query'));
    }
}

