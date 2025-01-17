<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SANPHAM;
use App\Models\SANPHAMYEUTHICH;
use App\Models\LOAISP;
use Illuminate\Support\Carbon;
use App\Models\BinhLuan;
use App\Models\HOADON;

class ProductUserController extends Controller
{
    public function show($slug)
    {
        // Tìm sản phẩm dựa trên Slug
        $product = SANPHAM::where('Slug', $slug)->where('TrangThai', 1)->first();

        if (!$product) {
            abort(404);
        }

        // Tăng lượt xem lên 1
        $product->LuotXem += 1;
        $product->save();

        // Lấy thông tin khách hàng đăng nhập
        $userId = session('User')['MaKH'] ?? null;
        $wishlistItem = null;

        if ($userId) {
            $wishlistItem = SANPHAMYEUTHICH::where('MaKH', $userId)
                ->where('MaSP', $product->MaSP)
                ->first();
        }
        // Kiểm tra quyền bình luận
        $canComment = false;
        if ($userId) {
            $hasPurchased = HOADON::where('MaKH', $userId)
                ->where('TrangThai', 3) // Trạng thái hóa đơn là 3 (đã giao)
                ->whereHas('CTHD', function ($query) use ($product) {
                    $query->where('MaSP', $product->MaSP);
                })
                ->exists();

            $hasCommented = BinhLuan::where('MaSP', $product->MaSP)
                ->where('MaKH', $userId)
                ->exists();

            $canComment = $hasPurchased && !$hasCommented;
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
        $commentCount = $commentProducts->total();
        $averageRating = BinhLuan::where('MaSP', $product->MaSP)
            ->where('TrangThai', 1)
            ->avg('SoSao');

        // Trả về view với dữ liệu
        return view('frontend.pages.single-product-details', compact(
            'product',
            'recommendedProducts',
            'commentProducts',
            'commentCount',
            'averageRating',
            'canComment',
            'userId',
            'wishlistItem',
        ));
    }

    public function listByCategory($slug)
    {
        $category = LOAISP::where('Slug', $slug)
        ->where('TrangThai',1)
        ->first();
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
    public function storeComment(Request $request, $slug)
    {
        // Tìm sản phẩm dựa trên Slug
        $product = SANPHAM::where('Slug', $slug)->first();

        if (!$product) {
            return response()->json(['error' => 'Product not found'], 404);
        }

        // Lấy thông tin khách hàng đăng nhập
        $userId = session('User')['MaKH'] ?? null;

        if (!$userId) {
            return response()->json(['error' => 'You need to log in to comment.'], 401);
        }

        // Kiểm tra khách hàng đã mua sản phẩm và trạng thái đơn hàng
        $hasPurchased = HOADON::where('MaKH', $userId)
            ->where('TrangThai', 3) // Trạng thái đã giao
            ->whereHas('CTHD', function ($query) use ($product) {
                $query->where('MaSP', $product->MaSP);
            })
            ->exists();

        if (!$hasPurchased) {
            return response()->json(['error' => 'You can only comment after purchasing this product.'], 403);
        }

        // Kiểm tra nếu khách hàng đã đánh giá sản phẩm này
        $existingComment = BinhLuan::where('MaSP', $product->MaSP)
            ->where('MaKH', $userId)
            ->exists();

        if ($existingComment) {
            return response()->json(['error' => 'You can only rate this product once.'], 403);
        }

        // Validate dữ liệu bình luận
        $validatedData = $request->validate([
            'NoiDung' => 'required|string|max:1000',
            'SoSao' => 'required|integer|min:1|max:5',
        ]);

        // Lưu bình luận vào bảng `binhluan`
        BinhLuan::create([
            'MaSP' => $product->MaSP,
            'MaKH' => $userId,
            'NoiDung' => $validatedData['NoiDung'],
            'SoSao' => $validatedData['SoSao'],
            'TrangThai' => 1, // Bình luận hiển thị
            'created_at' => now(),
        ]);

        return response()->json(['success' => 'Comment added successfully']);
    }



}