<?php

namespace App\Http\Controllers;

use App\Models\SANPHAMGIAMGIA;
use Illuminate\Http\Request;

class DiscountedProductController extends Controller
{
    //
    public function Index()
    {
        $discounted = SANPHAMGIAMGIA::all();
        return view('backend.pages.discounted.discounted-items-management' , compact('discounted'));
    }
}
