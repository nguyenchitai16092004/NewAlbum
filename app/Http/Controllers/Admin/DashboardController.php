<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\thongtinlienlac; // Import model ThongTinLienLac

class DashboardController extends Controller
{
    //Hiển thị form chỉnh sửa
    public function editDashboard()
    {
        $contactInfo = thongtinlienlac::first(); // Lấy thông tin liên lạc
        return view('backend.pages.dashboard', compact('contactInfo'));
    }


    public function updateDashboard(Request $request)
    {
        // Xác thực dữ liệu đầu vào
        $validated = $request->validate([
            'Email' => 'required|email',
            'Facebook' => 'nullable|url',
            'Instagram' => 'nullable|url',
            'Twitter' => 'nullable|url',
            'SDT' => 'required',
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