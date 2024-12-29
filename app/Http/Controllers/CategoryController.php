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

        $loaiSP = new LOAISP();
        $loaiSP->TenloaiSP = $request->input('TenLoaiSP');
        $loaiSP->save();

        return redirect()->route('Index_Category')->with('success', 'Thêm nhóm nhạc/ca sĩ thành công!');
    }

    public function Delete($id)
    {
        $loaiSP = LOAISP::findOrFail($id);
        $loaiSP->delete();
        return redirect()->route('Index_Category')->with('success', 'Thêm nhóm nhạc/ca sĩ thành công!');
    }

    public function Show($id)
    {
        $band = LOAISP::findOrFail($id);
        return view('backend.pages.category.edit-category', compact('band'));
    }

    public function Edit(Request $request, $id)
    {
        $loaiSP = LOAISP::findOrFail($id);
        $loaiSP->TenloaiSP = $request->input('TenloaiSP');
        $loaiSP->GioiTinh = $request->input('GioiTinh');
        $loaiSP->Loai = $request->input('Loai');
        $loaiSP->save();
        return redirect()->route('Index_Category');
    }
}
