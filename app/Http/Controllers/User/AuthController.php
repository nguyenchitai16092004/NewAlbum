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
            session()->put('User', $auth->MaKH);
            session()->flash('success', 'Login successfully!');
            return redirect()->route('home');
        } else {
            session()->flash('error', 'Login Name or password is incorrect.');
            return redirect()->back();
        }
    }
    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        $request->session()->flash('Signoutsuccess', 'Sign Out successfully!');
        return redirect()->route('home');
    }
}
