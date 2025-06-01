<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\KHOHANG;
use App\Models\QUANLY;
use App\Models\CHITIETKHO;
use Illuminate\Http\Request;

class WarehouseController extends Controller
{
    public function index()
    {
    $warehouses = KHOHANG::leftJoin('quanly', 'khohang.MaQL', '=', 'quanly.MaQL') // nếu có bảng quanly
        ->select(
            'khohang.*',
            'quanly.MaQL' // chỉ nếu bạn có cột này trong bảng quanly
        )
        ->paginate(5); // phân trang 5 dòng/1 trang

    return view('backend.pages.Warehouse.warehouse', [
        'warehouses' => $warehouses
    ]);
    }

    //Hiển thị Chi tiết kho 
    public function Show($id)
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

}
