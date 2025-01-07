<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Models\CART;

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
                'quantity' => 1,
                'total' => 1827680,
            ],
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
                'quantity' => 1,
                'total' => 1827680,
            ],
            [
                'image' => 'frontend/img/product-img/BTS-Lightstick.jpg',
                'product' => 'BTS Official Light Stick',
                'price' => 1827680,
                'quantity' => 1,
                'total' => 1827680,
            ],
        ];

        $blog = CART::all();
        $blog = CART::paginate(4);
        return view('frontend.pages.cart', compact('cart'));

        return view('frontend.pages.cart', compact('cartPaginated'));
    }
}