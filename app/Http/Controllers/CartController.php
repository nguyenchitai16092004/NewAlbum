<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class CartController extends Controller
{
    public function index(Request $request)
    {
        // Dữ liệu ảo cho giỏ hàng
        $cart = [
            [
                'image' => 'frontend/img/product-img/BTS-Lightstick.jpg',
                'product' => 'BTS Official Light Stick',
                'price' => 1827680,
                'quantity' => 1,
                'total' => 1827680,
            ],
            [
                'image' => 'frontend/img/product-img/BTS-Lightstick.jpg',
                'product' => 'BTS Official Light Stick',
                'price' => 1827680,
                'quantity' => 2,
                'total' => 1827680,
            ],
            [
                'image' => 'frontend/img/product-img/BTS-Lightstick.jpg',
                'product' => 'BTS Official Light Stick',
                'price' => 1827680,
                'quantity' => 3,
                'total' => 1827680,
            ],
            [
                'image' => 'frontend/img/product-img/BTS-Lightstick.jpg',
                'product' => 'BTS Official Light Stick',
                'price' => 1827680,
                'quantity' => 4,
                'total' => 1827680,
            ],
            [
                'image' => 'frontend/img/product-img/BTS-Lightstick.jpg',
                'product' => 'BTS Official Light Stick',
                'price' => 1827680,
                'quantity' => 5,
                'total' => 1827680,
            ],
            [
                'image' => 'frontend/img/product-img/BTS-Lightstick.jpg',
                'product' => 'BTS Official Light Stick',
                'price' => 1827680,
                'quantity' => 5,
                'total' => 1827680,
            ],
            [
                'image' => 'frontend/img/product-img/BTS-Lightstick.jpg',
                'product' => 'BTS Official Light Stick',
                'price' => 1827680,
                'quantity' => 5,
                'total' => 1827680,
            ],
            [
                'image' => 'frontend/img/product-img/BTS-Lightstick.jpg',
                'product' => 'BTS Official Light Stick',
                'price' => 1827680,
                'quantity' => 5,
                'total' => 1827680,
            ],
        ];
        // Phân trang dữ liệu giả lập
        $perPage = 6; // Số mục trên mỗi trang (mỗi trang sẽ hiển thị 3 sản phẩm)
        $currentPage = $request->get('page', 1); // Lấy trang hiện tại từ tham số 'page' trong URL, mặc định là trang 1 nếu không có tham số 'page'
        $currentItems = array_slice($cart, ($currentPage - 1) * $perPage, $perPage); // Cắt mảng $cart để lấy các sản phẩm cho trang hiện tại. ($currentPage - 1) * $perPage tính toán vị trí bắt đầu của các mục cần hiển thị trên trang hiện tại

        $cartPaginated = new LengthAwarePaginator(
            $currentItems, // Dữ liệu hiện tại, đây là các sản phẩm cho trang hiện tại
            count($cart), // Tổng số sản phẩm trong giỏ hàng (để tính tổng số trang)
            $perPage, // Số mục trên mỗi trang (3 sản phẩm mỗi trang)
            $currentPage, // Trang hiện tại mà người dùng đang xem
            ['path' => $request->url(), 'query' => $request->query()] // Đường dẫn và các tham số truy vấn hiện tại, giúp tạo các liên kết phân trang chính xác
        );
        return view('frontend.pages.cart', compact('cartPaginated'));
    }
}