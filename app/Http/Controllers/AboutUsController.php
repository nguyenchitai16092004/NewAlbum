<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\thongtinlienlac;

Class AboutUsController extends Controller
{
    public function aboutUs()
    {
        $contactInfo = ThongTinLienLac::first(); // Lấy dòng đầu tiên trong bảng
        return view('frontend.pages.about-us', compact('contactInfo'));
    }
}