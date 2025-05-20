<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\SANPHAMYEUTHICH;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\SANPHAM;

class WishlistController extends Controller
{
    public function index()
    {
        if (!session()->has('User')) {
            return redirect()->back()->with('error', 'Please log in to access your wishlist.');
        }

        $userId = session('User')['MaKH'];
        $wishlists = SANPHAMYEUTHICH::where('MaKH', $userId)->get();

        foreach ($wishlists as $wishlist) {
            $wishlist->product = SANPHAM::find($wishlist->MaSP);
        }

        return view('frontend.pages.wishlist', compact('wishlists'));
    }

    public function store(Request $request)
    {
        if (!session()->has('User')) {
            return redirect()->back()->with('error', 'Please log in to add products to your wishlist');
        }

        $userId = session('User')['MaKH'];

        // Kiểm tra nếu thiếu thông tin sản phẩm
        $request->validate([
            'MaSP' => 'required|exists:SANPHAM,MaSP',
        ]);

        $exists = SANPHAMYEUTHICH::where('MaKH', $userId)
            ->where('MaSP', $request->MaSP)
            ->first();

        if ($exists) {
            return redirect()->back()->with('error', 'Product is already in your wishlist.');
        }

        // Thêm sản phẩm vào wishlist
        SANPHAMYEUTHICH::create([
            'MaKH' => $userId,
            'MaSP' => $request->MaSP,
            'HinhAnh' => $request->HinhAnh,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->back()->with('success', 'Product added to wishlist successfully!');
    }

    public function delete($id)
    {
        $userId = session('User')['MaKH'];

        $wishlist = SANPHAMYEUTHICH::where('MaKH', $userId)->where('MaSP', $id)->delete();

        return redirect()->back()->with('success', 'Product removed from wishlist.');

    }
    
}
