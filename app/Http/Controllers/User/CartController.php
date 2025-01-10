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
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $cartCollection = collect($cart);
        $perPage = 4;
        $currentPageItems = $cartCollection->slice(($currentPage - 1) * $perPage, $perPage)->all();
        $paginatedCart = new LengthAwarePaginator(
            $currentPageItems,
            max($cartCollection->count(), 1),
            $perPage,
            $currentPage,
            ['path' => $request->url(), 'query' => $request->query()]
        );

        $recommendedProducts = SANPHAM::inRandomOrder()->take(4)->get();

        return view('frontend.pages.cart', [
            'cart' => $paginatedCart,
            'recommendedProducts' => $recommendedProducts,
            'cartTotal' => $cartCollection->isEmpty() ? 0 : $cartCollection->sum(function ($item) {
                return $item['price'] * $item['quantity'];
            }),
        ]);
    }



    // Thêm sản phẩm vào giỏ hàng
    public function addToCart(Request $request)
    {
        // Lấy toàn bộ dữ liệu sản phẩm từ request
        $product = $request->all();

        // Lấy giỏ hàng từ session, nếu chưa có thì trả về mảng rỗng
        $cart = session()->get('cart', []);

        // Kiểm tra nếu sản phẩm đã tồn tại trong giỏ hàng
        if (isset($cart[$product['id']])) {
            // Nếu có, tăng số lượng lên 1
            $cart[$product['id']]['quantity']++;
        } else {
            // Nếu chưa có, thêm sản phẩm mới vào giỏ hàng
            $cart[$product['id']] = [
                "name" => $product['name'], // Tên sản phẩm
                "quantity" => 1,            // Số lượng mặc định là 1
                "price" => $product['price'], // Giá sản phẩm
                "image" =>  $product['image']  // Hình ảnh sản phẩm
            ];
        }
        // Cập nhật lại giỏ hàng trong session
        session()->put('cart', $cart);

        // Trả về phản hồi JSON với thông tin giỏ hàng
        return response()->json(['success' => true, 'cart' => $cart]);
    }

    // Xóa sản phẩm khỏi giỏ hàng
    public function removeFromCart(Request $request)
    {
        // Lấy giỏ hàng từ session
        $cart = session()->get('cart', []);

        // Xóa sản phẩm có ID được cung cấp từ request
        unset($cart[$request->id]);

        // Cập nhật lại giỏ hàng trong session
        session()->put('cart', $cart);

        // Trả về phản hồi JSON với thông tin giỏ hàng
        return response()->json(['success' => true, 'cart' => $cart]);
    }

    // Cập nhật số lượng sản phẩm trong giỏ hàng
    public function updateCart(Request $request)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$request->id])) {
            if ($request->quantity > 0) {
                // Cập nhật số lượng nếu lớn hơn 0
                $cart[$request->id]['quantity'] = $request->quantity;
                session()->put('cart', $cart);
            } else {
                // Xóa sản phẩm nếu số lượng bằng 0
                unset($cart[$request->id]);
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


    // Xóa toàn bộ giỏ hàng
    public function clearCart()
    {
        // Xóa toàn bộ dữ liệu giỏ hàng khỏi session
        session()->forget('cart');

        // Trả về phản hồi JSON xác nhận thành công
        return response()->json(['success' => true]);
    }
}