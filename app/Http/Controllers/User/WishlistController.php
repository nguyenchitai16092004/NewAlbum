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
        $wishlists = SANPHAMYEUTHICH::where('MaKH', session()->get('User'))->get();

        foreach ($wishlists as $wishlist) {
        $wishlist->product = SANPHAM::find($wishlist->MaSP); 
    }
        return view('frontend.pages.wishlist', compact('wishlists'));
    }

    public function store(Request $request)
    {
        if (!session()->has('User')) {
            return redirect()->back()->with('error', 'Please log in first.');
        }

        $userId = session()->get('User'); 

        if (!$request->has('MaSP') || is_null($request->MaSP)) {
            return redirect()->back()->with('error', 'Product ID is required.');
        }

        $wishlists = SANPHAMYEUTHICH::create([
            'MaKH' => $userId,              
            'MaSP' => $request->MaSP,       
            'HinhAnh' => $request->HinhAnh, 
            'created_at' => now(),          
            'updated_at' => now(),          
        ]);

        return redirect()->back()->with('success', 'Product added to wishlist successfully!');
    }

    public function destroy($id)
    {
        $wishlist = SANPHAMYEUTHICH::findOrFail($id);
        if ($wishlist->MaKH == Auth::id()) {
            $wishlist->delete();
            return redirect()->back()->with('success', 'Product removed from wishlist.');
        }

        return redirect()->back()->with('error', 'Unauthorized action.');
    }

}
