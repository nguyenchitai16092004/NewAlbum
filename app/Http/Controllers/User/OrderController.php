<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HoaDon;
use App\Models\ChiTietHoaDon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;

class OrderController extends Controller
{
    public function placeOrder(Request $request)
    {
        
        $cart = session()->get('cart', []);
        $cart = json_decode($request->input('cart'), true);
        $diaChi = $request->input('diaChi');
    
        $userData = session('User');
        $maKH = $userData['MaKH'];
        if (empty($cart)) {
            return back()->with('error', 'Giỏ hàng của bạn đang trống.');
        }
    
        if (!$diaChi) {
            return back()->with('error', 'Vui lòng nhập địa chỉ.');
        }
        try {
            $hoaDon = new HoaDon();
            $hoaDon->MaKH =  $maKH;
            $hoaDon->TongTien = $request->input('cartTotal');
            $hoaDon->DiaChi = $diaChi;
            $hoaDon->save();
            // Xóa giỏ hàng chỉ sau khi đặt hàng thành công
            Session::forget('cart');
    
            return redirect('/')->with('success', 'Đặt hàng thành công!');
        } catch (\Exception $e) {
            Log::error("Đặt hàng thất bại: " . $e->getMessage());
            return back()->with('error', 'Có lỗi xảy ra khi đặt hàng. Vui lòng thử lại.');
        }
    }    

    // Hàm tính tổng giỏ hàng (ví dụ)
    private function getCartTotal($cart) {
        $total = 0;
        foreach ($cart as $item) {
            $total += $item['price'] * $item['quantity'];
        }
        return $total;
    }
}
