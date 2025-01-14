<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Models\SANPHAM;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use App\Models\thongtinlienlac;
use App\Models\LOAISP;
use Illuminate\Support\Carbon;

class HomeController extends Controller
{
    public function Index()
    {
        $allProducts = SANPHAM::where('TrangThai', 1)
            ->get()
            ->map(function ($product) {
                $product->isNew = $product->created_at >= Carbon::now()->subDays(7); //isNew() trả kq true or false,
                return $product;
            });
        $allPreOderProducts = SANPHAM::where('TrangThai', 1)
            ->where('LoaiHang', 1)
            ->get()
            ->map(function ($product) {
                $product->isNew = $product->created_at >= Carbon::now()->subDays(7); 
                return $product;
            });
        $allPosterProducts = SANPHAM::where('TrangThai', 1)
            ->where('MaLoaiSP', 3)
            ->get()
            ->map(function ($product) {
                $product->isNew = $product->created_at >= Carbon::now()->subDays(7); 
                return $product;
            });
        $allKGoodsProducts = SANPHAM::where('TrangThai', 1)
            ->where('MaLoaiSP', 2)
            ->get()
            ->map(function ($product) {
                $product->isNew = $product->created_at >= Carbon::now()->subDays(7); 
                return $product;
            });

        $preOder3ProductsCol1 = SANPHAM::where('TrangThai', 1)
            ->where('LoaiHang', 1)
            ->take(3)
            ->get()
            ->map(function ($product) {
                $product->isNew = $product->created_at >= Carbon::now()->subDays(7); 
                return $product;
            });

        $preOder3ProductsCol2 = SANPHAM::where('TrangThai', 1)
            ->where('LoaiHang', 1)
            ->skip(3)
            ->take(3)
            ->get()
            ->map(function ($product) {
                $product->isNew = $product->created_at >= Carbon::now()->subDays(7); 
                return $product;
            });

        $cart = session()->get('cart', []);
        $totalQuantity = array_sum(array_column($cart, 'quantity'));

        $thongtinlienlac = thongtinlienlac::first();

        return view('frontend.pages.home', compact('allProducts', 'preOder3ProductsCol1', 'preOder3ProductsCol2', 'totalQuantity', 'thongtinlienlac', 'allPreOderProducts', 'allPosterProducts', 'allKGoodsProducts'));
    }
}