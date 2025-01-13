<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Models\SANPHAM;
use App\Http\Controllers\Controller;


class CartController extends Controller
{

    public function index(Request $request)
    {
        $cart = session()->get('cart', []);
        $currentPage = LengthAwarePaginator::resolveCurrentPage(); // Xác định trang hiện tại
        $cartCollection = collect($cart); // Chuyển mảng -> collection
        $perPage = 4;
        $currentPageItems = $cartCollection->slice(($currentPage - 1) * $perPage, $perPage)->all(); // Tính toán các sản phẩm trong trang hiện tại
        $paginatedCart = new LengthAwarePaginator( // Tạo phân trang
            $currentPageItems, // Các sản phẩm trong trang hiện tại
            max($cartCollection->count(), 1), // Số lượng sản phẩm trong giỏ hàng
            $perPage,
            $currentPage, // Trang hiện tại
            ['path' => $request->url(), 'query' => $request->query()]
        );

        // Lấy danh sách ID sản phẩm trong giỏ hàng
        $cartProductIds = array_keys($cart);

        // Lấy 4 sản phẩm ngẫu nhiên không trùng với sản phẩm trong giỏ hàng
        $recommendedProducts = SANPHAM::whereNotIn('MaSP', $cartProductIds) // Loại trừ sản phẩm trong giỏ hàng
            ->inRandomOrder()
            ->take(4)
            ->get();

        return view('frontend.pages.cart', [
            'cart' => $paginatedCart, // Giỏ hàng sau khi phân trang
            'recommendedProducts' => $recommendedProducts, // Các sản phẩm gợi ý
            'cartTotal' => $cartCollection->isEmpty() ? 0 : $cartCollection->sum(function ($item) {
                return $item['price'] * $item['quantity']; // Tính tổng tiền
            }),
        ]);
    }


    public function addToCart(Request $request)
    {
        $product = $request->all();// đọc dlsp từ request
        $cart = session()->get('cart', []);
        if (isset($cart[$product['id']])) {// ktra sp đã có trong gh chưa
            $cart[$product['id']]['quantity']++; // tăng 1 nếu đã có
        } else {
            $cart[$product['id']] = [
                "name" => $product['name'],
                "quantity" => 1,
                "price" => $product['price'],
                "image" =>  $product['image']
            ];
        }
        session()->put('cart', $cart); // update lại gh trong session
        return response()->json(['success' => true, 'cart' => $cart]);
    }

    public function removeFromCart(Request $request)
    {
        $cart = session()->get('cart', []);
        unset($cart[$request->id]);
        session()->put('cart', $cart);

        $cartTotal = array_sum(array_map(function ($item) {
            return $item['price'] * $item['quantity'];
        }, $cart));

        return response()->json([
            'success' => true,
            'cart' => $cart,
            'cartTotal' => $cartTotal,
        ]);
    }



    public function updateCart(Request $request)
    {
        $cart = session()->get('cart', []);
        if (isset($cart[$request->id])) {
            if ($request->quantity > 0) {
                $cart[$request->id]['quantity'] = $request->quantity;// update sl nếu sl > 0
                session()->put('cart', $cart);
            } else {
                
                unset($cart[$request->id]);// xóa sp khỏi gh nếu sl = 0
                session()->put('cart', $cart);
            }
        }
        $itemTotal = isset($cart[$request->id]) ? $cart[$request->id]['price'] * $cart[$request->id]['quantity'] : 0;
        $cartTotal = array_sum(array_map(function ($item) {
            return $item['price'] * $item['quantity'];
        }, $cart));
        return response()->json([
            'success' => true,
            'itemTotal' => $itemTotal,
            'cartTotal' => $cartTotal,
        ]);
    }

    public function clearCart()
    {
        session()->forget('cart');
        return response()->json(['success' => true]);
    }
}