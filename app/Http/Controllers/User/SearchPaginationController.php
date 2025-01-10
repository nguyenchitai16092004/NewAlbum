<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\SANPHAM;
use Illuminate\Http\Request;

class SearchPaginationController extends Controller
{
    public function Index()
    {
        $products = SANPHAM::all();
        $products = SANPHAM::paginate(4);

        return view('frontend.pages.search', compact('products'));
    }

}
