<?php

namespace App\Http\Controllers\Admin;

use App\Models\NHOMNHACCASI;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BandController extends Controller
{
    public function Index()
    {
        $bands = NHOMNHACCASI::all();
        return view('backend.pages.band_singer.band-singer', compact('bands'));
    }
    
    public function Add(Request $request)
    {
        $request->validate([
            'TenNhomNhacCaSi' => 'required|string|max:255',
            'GioiTinh' => 'required|boolean',
            'Loai' => 'required|boolean',
        ]);

        $nhomNhacCaSi = new NHOMNHACCASI();
        $nhomNhacCaSi->TenNhomNhacCaSi = $request->input('TenNhomNhacCaSi');
        $nhomNhacCaSi->GioiTinh = $request->input('GioiTinh');
        $nhomNhacCaSi->Loai = $request->input('Loai');
        $nhomNhacCaSi->save();

        return redirect()->route('Index_Band')->with('success', 'Thêm nhóm nhạc/ca sĩ thành công!');
    }

    public function Delete($id){
        $nhomNhacCaSi = NHOMNHACCASI::findOrFail($id);
        $nhomNhacCaSi->delete();
        return redirect()->route('Index_Band')->with('success', 'Thêm nhóm nhạc/ca sĩ thành công!');
    }

    public function Show($id)
    {
        $band = NHOMNHACCASI::findOrFail($id);
        return view('backend.pages.band_singer.edit-band-singer', compact('band'));
    }

    public function Edit(Request $request , $id)
    {
        $nhomNhacCaSi = NHOMNHACCASI::findOrFail($id);
        $nhomNhacCaSi->TenNhomNhacCaSi = $request->input('TenNhomNhacCaSi');
        $nhomNhacCaSi->GioiTinh = $request->input('GioiTinh');
        $nhomNhacCaSi->Loai = $request->input('Loai');
        $nhomNhacCaSi->save();
        return redirect()->route('Index_Band');
    }
}
