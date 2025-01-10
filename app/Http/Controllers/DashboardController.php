<?php

namespace App\Http\Controllers;

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
             'Email' => 'required|email',  // Đảm bảo 'email' viết đúng
             'Facebook' => 'nullable|url',
             'Instagram' => 'nullable|url',
             'Twitter' => 'nullable|url',
             'SDT' => 'required',
         ]);
 
         // Lấy thông tin liên lạc đầu tiên
         $contactInfo = thongtinlienlac::first();
 
         // Nếu không tìm thấy thông tin, tạo mới
         if (!$contactInfo) {
             $contactInfo = new thongtinlienlac();
         }
 
         // Cập nhật các trường trong bảng
         $contactInfo->Email = $validated['Email'];
         $contactInfo->Facebook = $validated['Facebook'];
         $contactInfo->Instagram = $validated['Instagram'];
         $contactInfo->Twitter = $validated['Twitter'];
         $contactInfo->SDT = $validated['SDT'];
         
 
         // Lưu thông tin vào cơ sở dữ liệu
         $contactInfo->save();
 
         // Redirect với thông báo thành công
         return redirect()->route('dashboard.edit')->with('success', 'The information was updated successfully!');
     }
}

