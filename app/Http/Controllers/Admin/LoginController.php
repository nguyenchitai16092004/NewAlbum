<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\QUANLY;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function Login(Request $request)
    {
        $auth = QUANLY::where('TenDN', $request->input('TenDN'))
            ->where('MatKhau', $request->input('MatKhau'))
            ->first();

        if ($auth) {
            session()->put('Admin', $auth->MaQL); 
            return redirect()->route('dashboard.edit');
        } else {
            session()->flash('error', 'Nhập sai, vui lòng nhập lại');
            return view('backend.pages.sign-in');
        }
    }
    public function logout(){
        session()->forget('Admin');
        return view('backend.pages.sign-in');
    }
}
