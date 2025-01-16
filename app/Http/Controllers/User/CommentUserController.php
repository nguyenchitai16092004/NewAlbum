<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BinhLuan;
use App\Models\KHACHHANG;
use App\Models\HOADON;

class CommentUserController extends Controller
{
    public function index()
    {
        $userId = session('User')['MaKH'];
        $user = KhachHang::find($userId);

        if ($user) {
            $purchasedProducts = $user->HOADON()
                ->with('chiTietHoaDons') 
                ->get()
                ->pluck('chiTietHoaDons')  
                ->flatten();  

            $productIds = $purchasedProducts->pluck('MaSP');  

            $comments = BinhLuan::whereIn('MaSP', $productIds)  
                ->with(['KhachHang', 'SANPHAM'])  
                ->get();

            return view('frontend.pages.rating-product', compact('comments'));
        } else {
            return redirect()->back()->with('error', 'User not found.');
        }
    }

}
