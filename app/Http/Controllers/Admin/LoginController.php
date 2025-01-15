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
            return redirect()->route('dashboard.edit')->with('error', 'Login Fail!');;
        } else {
           
            return view('backend.pages.sign-in')->with('success', 'Login successful !');;
        }
    }
    public function logout(){
        session()->forget('Admin');
        return view('backend.pages.sign-in');
    }
}
