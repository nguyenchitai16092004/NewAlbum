<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\THONGTINLIENLAC;

class AboutUsController extends Controller
{
    public function aboutUs()
    {
        $contactInfo = THONGTINLIENLAC::first();
        return view('frontend.pages.about-us', compact('contactInfo'));
    }
    public function Index(){
        return view('frontend.pages.about-us');
    }
}