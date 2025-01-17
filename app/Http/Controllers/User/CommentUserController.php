<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BinhLuan;
use App\Models\KHACHHANG;

class CommentUserController extends Controller
{
    public function index()
    {
        $userId = session('User')['MaKH'];
        $comments = BinhLuan::where('MaKH',$userId)->get();
        if ($comments) {
            return view('frontend.pages.rating-product', compact('comments'));
        } else {
            return redirect()->back()->with('error', 'User not found.');
        }
    }
}