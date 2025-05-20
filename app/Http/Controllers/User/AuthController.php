<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\KhachHang;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function Login(Request $request)
    {
        $auth = KhachHang::where('TenDN', $request->input('loginname'))
            ->where('MatKhau', $request->input('password'))
            ->first();

        if ($auth) {
            // Lưu toàn bộ đối tượng KhachHang vào session
            session()->put('User', $auth); 

            session()->flash('success', 'Login successfully!');
            return redirect()->back();
        } else {
            session()->flash('error', 'Login Name or password is incorrect.');
            return redirect()->back();
        }
    }

    public function logout(Request $request)
    {
        // Xóa thông tin người dùng khỏi session
        session()->forget('User');
        
        // Hoặc có thể xóa toàn bộ session
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        session()->flash('Signoutsuccess', 'Sign Out successfully!');
        return redirect()->back();
    }
}