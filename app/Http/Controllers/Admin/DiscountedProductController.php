<?php

namespace App\Http\Controllers\Admin;

use App\Models\SANPHAMGIAMGIA;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DiscountedProductController extends Controller
{
    //
    public function Index()
    {
        $discounted = SANPHAMGIAMGIA::all();
        return view('backend.pages.discounted.discounted-items-management' , compact('discounted'));
    }
}
