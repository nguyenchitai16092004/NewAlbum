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

        // Lấy giỏ hàng từ session
        $cart = session()->get('cart', []);

        // Tính tổng số lượng sản phẩm
        $totalQuantity = array_sum(array_column($cart, 'quantity'));

        // Lấy thông tin liên lạc từ database
        $thongtinlienlac = thongtinlienlac::first();

        // Trả về view kèm dữ liệu giỏ hàng
        return view('frontend.pages.home', compact('products', 'totalQuantity', 'thongtinlienlac'));
    }
}