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

    

    private function getStatusMessage($status)
    {
        $statusMessages = [
            -1 => 'Cancelled',
            0  => 'Not yet confirmed',
            1  => 'Confirmed',
            2  => 'In delivery',
            3  => 'Delivered'
        ];

        return $statusMessages[$status] ?? 'Unknown status';
    }
        public function updateStatus(Request $request, $id)
    {
        // Lấy hóa đơn từ database
        $hoaDon = HoaDon::findOrFail($id);

        // Lấy trạng thái hiện tại và trạng thái mới từ request
        $currentStatus = $hoaDon->TrangThai;
        $newStatus = (int) $request->input('TrangThai');

        // Kiểm tra trạng thái mới phải lớn hơn hoặc bằng trạng thái hiện tại
        if ($newStatus < $currentStatus) {
            return redirect()->back()->with('error', 'Cannot change to a previous status.');
        }

        // Cập nhật trạng thái nếu hợp lệ
        $hoaDon->TrangThai = $newStatus;
        $hoaDon->save();

        return redirect()->back()->with('success', 'Status has been updated successfully.');
    }

}