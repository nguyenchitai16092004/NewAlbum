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
            'HinhAnh' => 'nullable|image|max:2048',
        ]);

        $validated['Slug'] = $slug;

        if ($request->hasFile('HinhAnh')) {
            $HinhAnh = $request->file('HinhAnh');
            $path = $HinhAnh->store('SanPham', 'public');
            $validated['HinhAnh'] = $path;
        }
        $sanpham = SANPHAM::create($validated);
        if ($sanpham) {
            session()->flash('success', 'Thêm sản phẩm thành công!');
        } else {
            session()->flash('error', 'Đã có lỗi xảy ra!');
        }

        return redirect()->route('Index_Product');
    }
    public function Delete($id) 
    {
        $products = SANPHAM::findOrFail($id);
        $products->TrangThai = 0;
        $products->save();
        
        session()->flash('success_delete', 'Xóa sản phẩm thành công!');
        return redirect()->route('Index_Product')->with('success', 'Thêm sản phẩm thành công!');
    }
}
