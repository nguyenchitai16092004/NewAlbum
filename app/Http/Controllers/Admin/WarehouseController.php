<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\KHOHANG;
use App\Models\QUANLY;
use App\Models\CHITIETKHO;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class WarehouseController extends Controller
{
    public function index()
    {
        $warehouses = KHOHANG::leftJoin('quanly', 'khohang.MaQL', '=', 'quanly.MaQL')
            ->where('khohang.TrangThai', 1) 
            ->select(
                'khohang.*',
                'quanly.TenQL as TenQuanLy' 
            )
            ->paginate(5);

        return view('backend.pages.Warehouse.warehouse', [
            'warehouses' => $warehouses
        ]);
    }

    //Hiển thị Chi tiết kho 
    public function Show_Detail($id)
    {
        $chiTietKho = chiTietKho::join('SANPHAM', 'SANPHAM.MaSP', '=', 'sanpham_khohang.MaSP')
            ->join('KHOHANG', 'KHOHANG.MaKho', '=', 'sanpham_khohang.MaKho')
            ->where('sanpham_khohang.MaKho', '=', $id)
            ->select(
                'sanpham_khohang.*',
                'SANPHAM.TenSP',
                'SANPHAM.GiaNhap',
                'SANPHAM.GiaBan',
                'SANPHAM.HinhAnh',
                'KHOHANG.TenKho',
                'KHOHANG.DiaChi'
            )
            ->get();

        return view('backend.pages.warehouse.warehouse_detail', compact('chiTietKho'));
    }

    public function Show()
    {
        $Quanly = QUANLY::where('TrangThai', '=', '0')->get();
        return view('backend.pages.warehouse.add-warehouse', compact('Quanly'));
    }
    public function Add(Request $request)
    {
        $slug = Str::slug($request->TenKho, '-');

        $validated = $request->validate([
            'MaQL' => 'required|numeric',
            'NgayNhap' => 'required|date',
            'NgayXuat' => 'required|date|after_or_equal:NgayNhap',
            'DiaChi' => 'required|string',
            'TenKho' => 'required|string',
        ]);
        $validated['Slug'] = $slug;
        KhoHang::create($validated);

        return redirect()->route('Index_Warehouse')->with('success', 'Warehouse added successfully!');
    }
    public function Delete($id)
    {
        $warehouses = KhoHang::findOrFail($id);

        $warehouses->TrangThai = 0;
        $warehouses->save();

        return redirect()->route('Index_Warehouse')->with('success', 'Warehouse deleted successfully!');
    }

}
