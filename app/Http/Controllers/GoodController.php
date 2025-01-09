<?php

namespace App\Http\Controllers;

use App\Models\PHIEUNHAP;
use Illuminate\Http\Request;

class GoodController extends Controller
{
    public function Index()
    {
        $goods = PHIEUNHAP::all();
        return view('backend.pages.goods-receipt.goods-receipt-management', compact('goods'));
    }
    //
}
