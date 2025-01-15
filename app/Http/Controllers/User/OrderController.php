<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HoaDon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
        public function placeOrder(Request $request)
    {
        $cart = json_decode($request->input('cart'), true);

        $cartTotal = $request->input('cartTotal');

        $diaChi = $request->input('diaChi');

        if (!$diaChi) {
            return back()->with('error', 'Vui lòng nhập địa chỉ.');
        }

        try {
            $hoaDon = new HoaDon();
            $hoaDon->MaKH = Auth::id();

            $hoaDon->TongTien = $cartTotal;
            $hoaDon->DiaChi = $diaChi;

            $hoaDon->save(); // Lưu dữ liệu

            Session::forget('cart');

            return redirect('/')->with('success', 'Đặt hàng thành công!');
        } catch (\Exception $e) {
            \Log::error($e);
            return back()->with('error', 'Có lỗi xảy ra khi đặt hàng.');
        }
    }
        public function showCheckout()
    {
        $cart = session()->get('cart', []); // Lấy giỏ hàng từ session
        $cartTotal = $this->getCartTotal($cart); // Hàm tính tổng giỏ hàng (bạn cần tự định nghĩa)

        // Debug: Kiểm tra giá trị của $cart và $cartTotal
        dd($cart, $cartTotal); // BỎ DÒNG NÀY SAU KHI ĐÃ KIỂM TRA

        return view('frontend.checkout', compact('cart', 'cartTotal'));
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
