<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\thongtinlienlac;

class WebsiteInfoController extends Controller
{
    public function home()
    {
        // Lấy thông tin liên lạc từ database
        $thongtinlienlac = thongtinlienlac::first();

        // Truyền dữ liệu sang view chính của trang home
        return view('frontend.pages.home', compact('thongtinlienlac'));
    }
}
