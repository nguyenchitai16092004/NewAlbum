<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SANPHAM;

class HomeController extends Controller
{
    public function Index(){
        $products = SANPHAM::all();

        foreach ($products as $product) {
            if ($product->HinhAnh) {
                $product->HinhAnh = base64_encode($product->HinhAnh);
            }
        }
        return view('frontend.pages.home',compact('products'));
    }
}
