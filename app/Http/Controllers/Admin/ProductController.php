<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\SANPHAM;
use App\Models\NHOMNHACCASI;
use App\Models\LOAISP;
use App\Http\Controllers\Controller;

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

    public function Show()
    {
        $NhomNhacCaSi = NHOMNHACCASI::all();
        $LoaiSP = LOAISP::all();

        return view('backend.pages.product.add-product', [
            'Band' => $NhomNhacCaSi,
            'Category' => $LoaiSP,
        ]);
    }

    public function Show_Edit($id)
    {
        $products = SANPHAM::join('LOAISP', 'SANPHAM.MaLoaiSP', '=', 'LOAISP.MaLoaiSP')
            ->join('NHOMNHACCASI', 'SANPHAM.MaNhomNhacCaSi', '=', 'NHOMNHACCASI.MaNhomNhacCaSi')
            ->where('SANPHAM.MaSP', '=', $id)
            ->select('SANPHAM.*', 'LOAISP.TenLoaiSP', 'NHOMNHACCASI.TenNhomNhacCaSi')
            ->first();

        $NhomNhacCaSi = NHOMNHACCASI::all();
        $LoaiSP = LOAISP::all();

        return view('backend.pages.product.edit-product', [
            'products' => $products,
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

            $TenHinhAnh = $HinhAnh->getClientOriginalName();

            $HinhAnh->move(public_path('storage/SanPham'), $TenHinhAnh);

            $validated['HinhAnh'] = $TenHinhAnh;
        }
        $sanpham = SANPHAM::create($validated);

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

    public function Edit(Request $request, $id)
    {
        $products = SANPHAM::findOrFail($id);
    
        // Gán giá trị từ request vào sản phẩm
        $products->MaNhomNhacCaSi = $request->input('MaNhomNhacCaSi');
        $products->MaLoaiSP = $request->input('MaLoaiSP');
        $products->MaSPGG = $request->input('MaSPGG');
        $products->TenSP = $request->input('TenSP');
        $products->GiaNhap = $request->input('GiaNhap');
        $products->GiaBan = $request->input('GiaBan');
        $products->TieuDe = $request->input('TieuDe');
        $products->MoTa = $request->input('MoTa');
        $products->SoLuong = $request->input('SoLuong');
    
        if ($request->hasFile('HinhAnh')) {
            $HinhAnh = $request->file('HinhAnh');
            $TenHinhAnh = $HinhAnh->getClientOriginalName();
            $HinhAnh->move(public_path('storage/SanPham'), $TenHinhAnh);
    
            $products->HinhAnh = $TenHinhAnh;
        }
    
        $products->save();
    
        return redirect()->route('Index_Product');
    }
    
}
