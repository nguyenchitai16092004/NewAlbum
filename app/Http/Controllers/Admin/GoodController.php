<?php

namespace App\Http\Controllers\Admin;

use App\Models\PHIEUNHAP;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GoodController extends Controller
{
    public function Index()
    {
        $goods = PHIEUNHAP::all();
        return view('backend.pages.goods-receipt.goods-receipt-management', compact('goods'));
    }
    //
}
