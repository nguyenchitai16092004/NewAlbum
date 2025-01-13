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
        $recommendedProducts = SANPHAM::inRandomOrder()->take(4)->get(); // lấy 4sp ngẫu nhiên trong csdl để hiện sp liên quan
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

    public function checkout()
    {
    $cart = session()->get('cart', []);
    $cartTotal = array_sum(array_map(function ($item) {
        return $item['price'] * $item['quantity'];
    }, $cart));

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