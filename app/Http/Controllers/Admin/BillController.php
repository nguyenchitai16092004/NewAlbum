<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HOADON;
use App\Models\CHITIETHOADON;
use Illuminate\Http\Request;
class BillController extends Controller

{
    public function Index()
    {
        $HoaDon = HOADON::join('KHACHHANG', 'KHACHHANG.MaKH', '=', 'HOADON.MaKH')
            ->where('HOADON.TrangThai', '>', -2)
            ->select('HOADON.*', 'KHACHHANG.TenKH')
            ->paginate(4);

        return view('backend.pages.bill.bill-management', compact('HoaDon'));
    }
    public function Show($id)
    {
        $ChiTietHoaDon = CHITIETHOADON::join('SANPHAM', 'SANPHAM.MaSP', '=', 'CHITIETHOADON.MaSP')
            ->join('HOADON', 'HOADON.MaHD', '=', 'CHITIETHOADON.MaHD')
            ->where('CHITIETHOADON.MaHD', '=', $id)
            ->get();

        return view('backend.pages.bill.bill-detail-management', compact('ChiTietHoaDon'));
    }


    public function Edit($id)
    {
        $HoaDon = HOADON::findOrFail($id);
        $HoaDon->TrangThai = 1;
        $HoaDon->save();

        return redirect()->route('Index_Bill_Management')->with('success', 'Invoice Accept successfully!');
    }

    public function Canncel($id)
    {
        $HoaDon = HOADON::findOrFail($id);
        $HoaDon->TrangThai = -2;
        $HoaDon->save();

        return redirect()->route('Index_Bill_Management')->with('success', 'Invoice deleted successfully!');
    }

}