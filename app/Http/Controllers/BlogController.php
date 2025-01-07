<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BLOG;

class BlogController extends Controller
{
    public function Index(){
        $blog = BLOG::all();
        $blog = BLOG::paginate(4);
        return view('frontend.pages.blog', compact('blog'));
    }

}
