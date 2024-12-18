<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SANPHAM;

class ProductController extends Controller
{
    //
    public function Index()
    {
        $Products = SANPHAM::all();
        return view('backend.pages.product.product', compact('Products'));
    }
}
