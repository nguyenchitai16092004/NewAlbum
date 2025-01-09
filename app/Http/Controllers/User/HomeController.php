<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Models\SANPHAM;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function Index(){
        $products = SANPHAM::all();

        return view('frontend.pages.home',compact('products'));
    }
}
