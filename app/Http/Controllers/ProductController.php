<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Models\SANPHAM;
use App\Models\NHOMNHACCASI;
use App\Models\LOAISP;

class ProductController extends Controller
{


    public function Index()
    {
        $products = SANPHAM::join('LOAISP', 'SANPHAM.MaLoaiSP', '=', 'LOAISP.MaLoaiSP')
            ->join('NHOMNHACCASI', 'SANPHAM.MaNhomNhacCaSi', '=', 'NHOMNHACCASI.MaNhomNhacCaSi')
            ->select('SANPHAM.*', 'LOAISP.TenLoaiSP', 'NHOMNHACCASI.TenNhomNhacCaSi')
            ->paginate(10);

        foreach ($products as $product) {
            if ($product->HinhAnh) {
                $product->HinhAnh = base64_encode($product->HinhAnh);
            }
        }
        return view('backend.pages.product.product', compact('products'));
    }




    public function show()
    {
        $NhomNhacCaSi = NHOMNHACCASI::all();
        $LoaiSP = LOAISP::all();

        return view('backend.pages.product.add-product', [
            'Band' => $NhomNhacCaSi,
            'Category' => $LoaiSP,
        ]);
    }

    public function Add(Request $request)
    {
        $slug = Str::slug($request->TenSP, '-');
    
        $validated = $request->validate([
            'MaNhomNhacCaSi' => 'nullable|numeric',
            'MaLoaiSP' => 'nullable|numeric',
            'MaSPGG' => 'nullable|numeric',
            'TenSP' => 'required|max:255',
            'GiaNhap' => 'nullable|numeric',
            'GiaBan' => 'nullable|numeric',
            'TieuDe' => 'required|max:255',
            'MoTa' => 'nullable|string',
            'SoLuong' => 'nullable|integer',
            'LoaiHang' => 'nullable|boolean',
            'TrangThai' => 'nullable|boolean',
            'HinhAnh' => 'nullable|image|max:2048', // Đảm bảo ảnh được kiểm tra đúng
        ]);
    
        $validated['Slug'] = $slug;
    
        if ($request->hasFile('HinhAnh')) {
            $file = $request->file('HinhAnh');
            $imageData = file_get_contents($file->getRealPath());
            $validated['HinhAnh'] = $imageData;
        }
        SANPHAM::create($validated);
    
        return redirect()->route('Index_Product')->with('success', 'Thêm sản phẩm thành công!');
    }
    
}
