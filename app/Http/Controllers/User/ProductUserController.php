<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SANPHAM;
use App\Models\LOAISP;
use Illuminate\Support\Carbon;

class ProductUserController extends Controller
{
    public function show($id)
    {
        $product = SANPHAM::where('MaSP', $id)->where('TrangThai', 1)->first();

        if (!$product) {
            abort(404);
        }

        $recommendedProducts = SANPHAM::where('MaLoaiSP', $product->MaLoaiSP)
            ->where('MaSP', '!=', $id)
            ->where('TrangThai', 1)
            ->take(5)
            ->get();

        return view('frontend.pages.single-product-details', compact('product', 'recommendedProducts'));
    }

    public function listByCategory($id)
    {
        $category = LOAISP::find($id);

        if (!$category) {
            abort(404, 'Category does not exist!');
        }

        // Query sản phẩm
        $productsQuery = SANPHAM::where('MaLoaiSP', $id)
            ->where('TrangThai', 1);

        // Phân trang
        $products = $productsQuery->paginate(6);

        // Thêm thuộc tính `isNew` cho từng sản phẩm
        $products->getCollection()->transform(function ($product) {
            $product->isNew = $product->created_at >= Carbon::now()->subDays(7);
            return $product;
        });

        return view('frontend.pages.listproduct', compact('category', 'products'));
    }
}