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
        // Lấy giỏ hàng từ session, nếu chưa có thì trả về mảng rỗng
        $cart = session()->get('cart', []);

        // Xác định trang hiện tại trong phân trang
        $currentPage = LengthAwarePaginator::resolveCurrentPage();

        // Chuyển giỏ hàng thành một Collection để xử lý dễ dàng hơn
        $cartCollection = collect($cart);

        // Số lượng sản phẩm hiển thị mỗi trang
        $perPage = 4;

        // Lấy các sản phẩm thuộc trang hiện tại
        $currentPageItems = $cartCollection->slice(($currentPage - 1) * $perPage, $perPage)->all();

        // Tạo đối tượng phân trang LengthAwarePaginator
        $paginatedCart = new LengthAwarePaginator(
            $currentPageItems, // Dữ liệu sản phẩm của trang hiện tại
            max($cartCollection->count(), 1), // Tổng số sản phẩm (ít nhất 1 trang)
            $perPage, // Số sản phẩm mỗi trang
            $currentPage, // Trang hiện tại
            ['path' => $request->url(), 'query' => $request->query()] // Đường dẫn và query string
        );

        // Lấy 4 sản phẩm gợi ý từ bảng SANPHAM
        $recommendedProducts = SANPHAM::inRandomOrder()->take(4)->get();

        // Trả về view cùng dữ liệu giỏ hàng và sản phẩm gợi ý
        return view('frontend.pages.cart', [
            'cart' => $paginatedCart,
            'recommendedProducts' => $recommendedProducts
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
                "image" => $product['image']  // Hình ảnh sản phẩm
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
        // Lấy giỏ hàng từ session
        $cart = session()->get('cart', []);

        // Kiểm tra nếu sản phẩm tồn tại trong giỏ hàng
        if (isset($cart[$request->id])) {
            // Cập nhật số lượng sản phẩm
            $cart[$request->id]['quantity'] = $request->quantity;

            // Cập nhật lại giỏ hàng trong session
            session()->put('cart', $cart);
        }

        // Tính tổng giá trị của sản phẩm vừa cập nhật
        $itemTotal = $cart[$request->id]['price'] * $cart[$request->id]['quantity'];

        // Tính tổng giá trị toàn bộ giỏ hàng
        $cartTotal = array_sum(array_map(function ($item) {
            return $item['price'] * $item['quantity'];
        }, $cart));

        // Trả về phản hồi JSON với thông tin tổng giá trị sản phẩm và giỏ hàng
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