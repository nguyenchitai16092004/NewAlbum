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
        $currentPage = LengthAwarePaginator::resolveCurrentPage(); //xđ trang mđ là 1 
        $cartCollection = collect($cart); //chuyển mảng -> conllect
        $perPage = 4;
        $currentPageItems = $cartCollection->slice(($currentPage - 1) * $perPage, $perPage)->all(); //tính số trang
        $paginatedCart = new LengthAwarePaginator( //tạo phân trang
            $currentPageItems, // sp trong trang
            max($cartCollection->count(), 1), // slsp trg gh
            $perPage,
            $currentPage, // trang htai
            ['path' => $request->url(), 'query' => $request->query()]
        );
        $recommendedProducts = SANPHAM::inRandomOrder()
            ->where('TrangThai', 1)
            ->take(4)
            ->get(); 
        return view('frontend.pages.cart', [
            'cart' => $paginatedCart, // gh sau khi phân trang.
            'recommendedProducts' => $recommendedProducts,
            'cartTotal' => $cartCollection->isEmpty() ? 0 : $cartCollection->sum(function ($item) {
                return $item['price'] * $item['quantity']; // tính tổng tiền
            }),
        ]);
    }




    public function addToCart(Request $request)
    {

        $product = $request->all(); 
        $cart = session()->get('cart', []);

        // Kiểm tra dữ liệu
        $quantity = isset($product['quantity']) && $product['quantity'] > 0 ? $product['quantity'] : 1;
        $slug = $product['slug'] ?? null; // Lấy slug, mặc định null nếu không có

        if (!$slug) {
            return response()->json(['success' => false, 'message' => 'Invalid product slug.'], 400);
        }

        if (isset($cart[$product['id']])) {
            // Tăng số lượng nếu sản phẩm đã có trong giỏ
            $cart[$product['id']]['quantity'] += $quantity;
        } else {
            // Thêm sản phẩm mới vào giỏ hàng
            $cart[$product['id']] = [
                "name" => $product['name'],
                "quantity" => $quantity,
                "slug" => $slug, // Lưu slug trong giỏ hàng
                "price" => $product['price'],
                "image" => $product['image']
            ];
        }

        // Lưu lại giỏ hàng trong session
        session()->put('cart', $cart);

        return response()->json(['success' => true, 'cart' => $cart]);
    }




    public function removeFromCart(Request $request)
    {
        $cart = session()->get('cart', []);
        unset($cart[$request->id]);
        session()->put('cart', $cart);

        // tinh tổng tiền gh
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
                $cart[$request->id]['quantity'] = $request->quantity; // update sl nếu sl > 0
                session()->put('cart', $cart);
            } else {

                unset($cart[$request->id]); // xóa sp khỏi gh nếu sl = 0
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

        public function checkout()
    {
        if (!session()->has('User')) {
            return redirect()->route('cart.index')->with('error', 'Please sign in to complete your purchase'); // Redirect to login
        }

        $cart = session()->get('cart', []);
        $cartTotal = array_sum(array_map(function ($item) {
            return $item['price'] * $item['quantity'];
        }, $cart));

        if (empty($cart)) { // Check if the cart is empty
            return redirect()->route('cart')->with('error', 'Your cart is empty.'); // Redirect to cart if empty
        }

        return view('frontend.pages.checkout', [
            'cart' => $cart,
            'cartTotal' => $cartTotal,
        ]);
    }
    public function updateNote(Request $request)
    {
        $note = $request->input('order_note');
        session()->put('order_note', $note);

        return redirect()->back()->with('success', 'Note updated successfully!');
    }
}