<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\thongtinlienlac; // Import model ThongTinLienLac
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    //Hiển thị form chỉnh sửa
    public function editDashboard()
    {
        // Lấy thông tin liên lạc
        $contactInfo = thongtinlienlac::first();

        // Thống kê số lượng đơn hàng trong tháng này
        $donHangThangNay = DB::table('HOADON')
            ->whereMonth('created_at', now()->month)
            ->whereYear('created_at', now()->year)
            ->count();

        // Thống kê số lượng người dùng đã đăng ký trong tháng này
        $nguoiDungThangNay = DB::table('KHACHHANG')
            ->whereMonth('created_at', now()->month)
            ->whereYear('created_at', now()->year)
            ->count();

         $productStats = DB::table('LOAISP')
            ->leftjoin('SANPHAM', 'SANPHAM.MaLoaiSP', '=', 'LOAISP.MaLoaiSP')
            ->select('LOAISP.TenLoaiSP', DB::raw('COUNT(SANPHAM.MaSP) as SoLuong'))
            ->where('LOAISP.TrangThai' , '=' , 1)
            ->groupBy('LOAISP.TenLoaiSP')
            ->get();
        // Truyền dữ liệu vào view
        return view('backend.pages.dashboard', compact('contactInfo', 'donHangThangNay', 'nguoiDungThangNay' , 'productStats' ));
    }



    public function updateDashboard(Request $request)
    {
        // Xác thực dữ liệu đầu vào
        $validated = $request->validate([
            'Facebook' => 'nullable|url', // Định dạng URL hợp lệ
            'Instagram' => 'nullable|url', // Định dạng URL hợp lệ
            'Twitter' => 'nullable|url', // Định dạng URL hợp lệ
            'SDT' => 'required|numeric', // Chỉ được nhập số
            'Email' => 'required|email|regex:/^[\w.%+-]+@gmail\.com$/', // Định dạng email và phải thuộc miền @gmail.com
        ], [
            'Facebook.url' => 'Liên kết Facebook phải đúng định dạng URL.',
            'Instagram.url' => 'Liên kết Instagram phải đúng định dạng URL.',
            'Twitter.url' => 'Liên kết Twitter phải đúng định dạng URL.',
            'SDT.required' => 'Vui lòng nhập số điện thoại.',
            'SDT.numeric' => 'Số điện thoại chỉ được chứa số.',
            'Email.required' => 'Vui lòng nhập email.',
            'Email.email' => 'Email phải là định dạng hợp lệ.',
            'Email.regex' => 'Email phải thuộc miền @gmail.com.',
        ]);

        // Xóa các bản ghi thừa nếu tồn tại
        thongtinlienlac::skip(1)->take(PHP_INT_MAX)->delete();

        // Lấy thông tin liên lạc đầu tiên hoặc tạo mới
        $contactInfo = thongtinlienlac::firstOrNew([]);

        // Cập nhật và lưu thông tin
        $contactInfo->fill($validated)->save();

        return redirect()->route('dashboard.edit')->with('success', 'The information was updated successfully!');
    }
}
