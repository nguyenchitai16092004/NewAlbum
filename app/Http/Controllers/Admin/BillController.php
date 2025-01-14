<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HOADON;
use App\Models\CHITIETHOADON;
use Illuminate\Http\Request;

class BillController extends Controller
{
    public function Index(){
        $HoaDon = HOADON::join('KHACHHANG' , 'KHACHHANG.MaKH' , '=' , 'HOADON.MaKH')
        ->select('HOADON.*', 'KHACHHANG.TenKH')->paginate(4);

        return view('backend.pages.bill.bill-management', compact('HoaDon'));
    }
    public function Show($id){
        $ChiTietHoaDon = CHITIETHOADON::where('MaHD' , '=' , $id)->get();

        return view('backend.pages.bill.Bill-detail-management',compact('ChiTietHoaDon'));
    }

    public function Edit($id){
        $HoaDon = HOADON::findOrFail($id);
        $HoaDon->TrangThai = 1;
        $HoaDon->save();
        return view('backend.pages.bill.bill-detail-management',compact('ChiTietHoaDon'));
    }
}
