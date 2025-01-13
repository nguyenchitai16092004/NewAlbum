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
        $ChiTietHoaDon = CHITIETHOADON::
    }
}
