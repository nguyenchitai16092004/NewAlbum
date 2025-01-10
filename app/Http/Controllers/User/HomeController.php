<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Models\SANPHAM;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use App\Models\thongtinlienlac;

class HomeController extends Controller
{
    public function Index()
    {
        $products = SANPHAM::all();
        $cart = session()->get('cart', []);
        // tổng slsp trong gh
        $totalQuantity = array_sum(array_column($cart, 'quantity'));
        // thông tin trang web
        $thongtinlienlac = thongtinlienlac::first();
        return view('frontend.pages.home', compact('products', 'totalQuantity', 'thongtinlienlac'));
    }
}