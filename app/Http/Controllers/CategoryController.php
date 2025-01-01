<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LOAISP;

class CategoryController extends Controller
{
    public function Index()
    {
        $categories = LOAISP::all();
        return view('backend.pages.category.category', compact('categories'));
    }

    public function Add(Request $request)
    {
        $request->validate([
            'TenLoaiSP' => 'required|string|max:255',
        ]); 

        $categories = new LOAISP();
        $categories->TenloaiSP = $request->input('TenLoaiSP');
        $categories->save();

        return redirect()->route('Index_Category');
    }

    public function Delete($id)
    {
        $categories = LOAISP::findOrFail($id);
        $categories->delete();
        return redirect()->route('Index_Category');
    }

    public function Show($id)
    {
        $categories = LOAISP::findOrFail($id);
        return view('backend.pages.category.edit-category', compact('categories'));
    }

    public function Edit(Request $request, $id)
    {
        $categories = LOAISP::findOrFail($id);
        $categories->TenloaiSP = $request->input('TenloaiSP');
        $categories->save();
        return redirect()->route('Index_Category');
    }
}
