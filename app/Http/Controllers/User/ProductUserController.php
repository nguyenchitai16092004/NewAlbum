<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SANPHAM;
use App\Models\LOAISP;
use Illuminate\Support\Carbon;
use App\Models\BinhLuan;

class ProductUserController extends Controller
{
    public function show($id)
    {
        // Tìm sản phẩm dựa trên Slug
        $product = SANPHAM::where('Slug', $id)->where('TrangThai', 1)->first();

        if (!$product) {
            abort(404);
        }

        // Lấy các sản phẩm đề xuất
        $recommendedProducts = SANPHAM::where('MaLoaiSP', $product->MaLoaiSP)
            ->where('MaSP', '!=', $product->MaSP)
            ->where('TrangThai', 1)
            ->take(5)
            ->get()
            ->map(function ($product) {
                $product->isNew = $product->created_at >= Carbon::now()->subDays(7);
                return $product;
            });

        // Phân trang bình luận (3 bình luận/trang)
        $commentProducts = BinhLuan::with('khachHang')
            ->where('MaSP', '=', $product->MaSP)
            ->where('TrangThai', 1)
            ->paginate(3);

        // Tính tổng số bình luận và trung bình số sao
        $commentCount = $commentProducts->total(); // Sử dụng total() để đếm tổng số bình luận
        $averageRating = BinhLuan::where('MaSP', $product->MaSP)
            ->where('TrangThai', 1)
            ->avg('SoSao'); // Tính trung bình số sao

        // Trả về view với dữ liệu
        return view('frontend.pages.single-product-details', compact('product', 'recommendedProducts', 'commentProducts', 'commentCount', 'averageRating'));
    }


    public function listByCategory($slug)
    {
        $category = LOAISP::where('Slug', $slug)->first();

        if (!$category) {
            abort(404, 'Category does not exist!');
        }

        $productsQuery = SANPHAM::where('MaLoaiSP', $category->MaLoaiSP)
            ->where('TrangThai', 1);

        $products = $productsQuery->paginate(6);

        $products->getCollection()->transform(function ($product) {
            $product->isNew = $product->created_at >= Carbon::now()->subDays(7);
            return $product;
        });

        return view('frontend.pages.listproduct', compact('category', 'products'));
    }

}