<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QUANLY;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class StaffController extends Controller
{
    // Hiển thị danh sách nhân viên
    public function index()
    {
        $staffs = QUANLY::where('ChucVu', '!=', 'Admin')->get();
        return view('backend.pages.staff.staff-management', compact('staffs'));
    }

    // Hiển thị form thêm mới
    public function create()
    {
        return view('backend.pages.staff.add-staff-management');
    }

    // Lưu nhân viên mới
    public function store(Request $request)
    {
        $validated = $request->validate([
            'TenQL' => 'required|string|max:255',
            'NgaySinh' => 'required|date',
            'ChucVu' => 'required|string|max:50',
            'Email' => 'required|email|unique:QUANLY,Email',
            'MatKhau' => 'required|string|min:6',
            'TenDN' => 'required|string|unique:QUANLY,TenDN',
            'SDT' => 'required|string|max:15',
            'GioiTinh' => 'required|boolean',
            'HinhAnh' => 'nullable|image|max:2048',
            'TrangThai' => 'required|boolean',
        ]);

        if ($request->hasFile('HinhAnh')) {
            $path = $request->file('HinhAnh')->store('staff_images', 'public');
            $validated['HinhAnh'] = $path;
        }

        $validated['MatKhau'] = Hash::make($validated['MatKhau']);

        QUANLY::create($validated);

        return redirect()->route('backend.pages.staff.staff-management')->with('success', 'Thêm nhân viên thành công!');
    }

    // Hiển thị form chỉnh sửa
    public function edit($id)
    {
        $staff = QUANLY::findOrFail($id);
        return view('backend.pages.staff.edit-staff-management', compact('staff'));
    }

    // Cập nhật thông tin nhân viên
    public function update(Request $request, $id)
    {
        $staff = QUANLY::findOrFail($id);

        $validated = $request->validate([
            'TenQL' => 'required|string|max:255',
            'NgaySinh' => 'required|date',
            'ChucVu' => 'required|string|max:50',
            'Email' => 'required|email|unique:QUANLY,Email,' . $staff->MaQL . ',MaQL',
            'TenDN' => 'required|string|unique:QUANLY,TenDN,' . $staff->MaQL . ',MaQL',
            'SDT' => 'required|string|max:15',
            'GioiTinh' => 'required|boolean',
            'HinhAnh' => 'nullable|image|max:2048',
            'TrangThai' => 'required|boolean',
        ]);

        if ($request->filled('MatKhau')) {
            $validated['MatKhau'] = Hash::make($request->input('MatKhau'));
        }

        if ($request->hasFile('HinhAnh')) {
            // Xóa ảnh cũ nếu có
            if ($staff->HinhAnh && Storage::disk('public')->exists($staff->HinhAnh)) {
                Storage::disk('public')->delete($staff->HinhAnh);
            }
            $path = $request->file('HinhAnh')->store('staff_images', 'public');
            $validated['HinhAnh'] = $path;
        }

        $staff->update($validated);

        return redirect()->route('backend.pages.staff.staff-management')->with('success', 'Cập nhật nhân viên thành công!');
    }

    // Xóa nhân viên (ẩn)
    public function destroy($id)
    {
        $staff = QUANLY::findOrFail($id);
        $staff->TrangThai = 0;
        $staff->save();

        return redirect()->route('backend.pages.staff.staff-management')->with('success', 'Nhân viên đã bị vô hiệu hóa!');
    }
}
