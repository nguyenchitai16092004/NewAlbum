<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Models\SANPHAM;
use App\Models\SANPHAMYEUTHICH;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use App\Models\thongtinlienlac;
use App\Models\LOAISP;
use App\Models\BLOG;
use Illuminate\Support\Carbon;



class HomeController extends Controller
{
    public function Index()
    {
        $product = SANPHAM::where('TrangThai', 1)->first();

        // Lấy thông tin khách hàng đăng nhập
        $userId = session('User')['MaKH'] ?? null;
        $wishlistItem = null;

        if ($userId) {
            $wishlistItem = SANPHAMYEUTHICH::where('MaKH', $userId)
                ->where('MaSP', $product->MaSP)
                ->first();
        }

        // Lấy 4 sản phẩm "New Arrivals" mới nhất
        $newArrivalProducts = SANPHAM::where('TrangThai', 1)
            ->orderBy('created_at', 'desc') // Sắp xếp theo ngày tạo mới nhất
            ->take(4) // Lấy 4 sản phẩm
            ->get()
            ->map(function ($product) {
                $product->isNew = $product->created_at >= Carbon::now()->subDays(7);
                return $product;
            });

        // Lấy bài viết blog
        $blogPost = BLOG::where('TrangThai', 1)->inRandomOrder()->first();

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
        $allPosterProducts = SANPHAM::join('LOAISP', 'SANPHAM.MaLoaiSP', '=', 'LOAISP.MaLoaiSP')
            ->where('SANPHAM.TrangThai', 1)
            ->where('LOAISP.Slug', 'poster')
            ->select('SANPHAM.*', 'LOAISP.TenLoaiSP')
            ->get()
            ->map(function ($product) {
                $product->isNew = $product->created_at >= Carbon::now()->subDays(7);
                return $product;
            });

        $allKGoodsProducts = SANPHAM::join('LOAISP', 'SANPHAM.MaLoaiSP', '=', 'LOAISP.MaLoaiSP')
            ->where('SANPHAM.TrangThai', 1)
            ->where('LOAISP.Slug', 'k-goods')
            ->select('SANPHAM.*', 'LOAISP.TenLoaiSP')
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

        try {
            return view('frontend.pages.home', compact(
                'allProducts',
                'preOder3ProductsCol1',
                'preOder3ProductsCol2',
                'totalQuantity',
                'thongtinlienlac',
                'allPreOderProducts',
                'allPosterProducts',
                'allKGoodsProducts',
                'newArrivalProducts',
                'blogPost',
                'userId',
                'wishlistItem',
            ));
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
    public function showNewArrival()
    {
        $products = SANPHAM::where('TrangThai', 1)
            ->paginate(6);
        $products->getCollection()->transform(function ($product) {
            $product->isNew = $product->created_at >= Carbon::now()->subDays(7);
            return $product;
        });
        return view('frontend.pages.new-arrival', compact('products'));
    }
    public function showPreOrders()
    {
        $products = SANPHAM::where('TrangThai', 1)
            ->where('LoaiHang', 1)
            ->paginate(6);
        $products->getCollection()->transform(function ($product) {
            $product->isNew = $product->created_at >= Carbon::now()->subDays(7);
            return $product;
        });
        return view('frontend.pages.pre-oders', compact('products'));
    }
}