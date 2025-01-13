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
        // Tất cả sản phẩm có TrangThai = 1
        $allProducts = SANPHAM::where('TrangThai', 1)->get();

        // 6 sản phẩm đầu tiên pre-order (Column 1)
        $preOder3ProductsCol1 = SANPHAM::where('TrangThai', 1)
            ->where('LoaiHang', 1)
            ->take(3)
            ->get();

        // 3 sản phẩm tiếp theo pre-order (Column 2)
        $preOder3ProductsCol2 = SANPHAM::where('TrangThai', 1)
            ->where('LoaiHang', 1)
            ->skip(3) // Bỏ qua 6 sản phẩm đầu tiên
            ->take(3) // Lấy 3 sản phẩm tiếp theo
            ->get();

        // Lấy thông tin giỏ hàng
        $cart = session()->get('cart', []);
        $totalQuantity = array_sum(array_column($cart, 'quantity'));

        // Lấy thông tin liên lạc
        $thongtinlienlac = thongtinlienlac::first();

        // Trả dữ liệu về view
        return view('frontend.pages.home', compact('allProducts', 'preOder3ProductsCol1', 'preOder3ProductsCol2', 'totalQuantity', 'thongtinlienlac'));
    }
}