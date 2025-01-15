<?php

namespace App\Http\Controllers\Admin;

use App\Models\NHOMNHACCASI;
use App\Models\SANPHAM;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BandController extends Controller
{
    //Hiện danh sách nhóm nhạc ca sĩ
    public function Index()
    {
        $bands = NHOMNHACCASI::where('TrangThai','=',1)->paginate(3);
        return view('backend.pages.band_singer.band-singer', compact('bands'));
    }
    
    //Hiển thị chi tiết nhóm nhạc ca sĩ
    public function Show($id)
    {
        $band = NHOMNHACCASI::findOrFail($id);
        return view('backend.pages.band_singer.edit-band-singer', compact('band'));
    }

    //Thêm nhóm nhạc ca sĩ
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

        return redirect()->route('Index_Band')->with('success', '"Add successful music group/singer"!');
    }

    //Sửa thông tin nhóm nhạc ca sĩ
    public function Edit(Request $request , $id)
    {
        $nhomNhacCaSi = NHOMNHACCASI::findOrFail($id);
        $nhomNhacCaSi->TenNhomNhacCaSi = $request->input('TenNhomNhacCaSi');
        $nhomNhacCaSi->GioiTinh = $request->input('GioiTinh');
        $nhomNhacCaSi->Loai = $request->input('Loai');
        $nhomNhacCaSi->save();
        return redirect()->route('Index_Band')->with('success', '"Edit successful music group/singer"!');
    }

    //Xóa nhóm nhạc ca sĩ (xóa mềm) 
    public function Delete($id){
        $nhomNhacCaSi = NHOMNHACCASI::findOrFail($id);
        $nhomNhacCaSi->TrangThai = 0;
        $nhomNhacCaSi->save();

        SANPHAM::where('MaNhomNhacCaSi', '=', $id)->update(['MaNhomNhacCaSi' => null]);

        return redirect()->route('Index_Band')->with('success', 'Delete music group/singer successfully!');
    }

    //Tìm kiếm sản phẩm
    public function Search(Request $request)
    {
        $search = $request->input('search');
    
        if (empty($search)) {
            $bands = NHOMNHACCASI::where('TrangThai','=',1)->paginate(3);
            return view('backend.pages.band_singer.band-singer',['bands' => $bands]);
        } else {
            $TimKiem = NHOMNHACCASI::where('TenNhomNhacCaSi', 'LIKE', '%' . $search . '%')->where('TrangThai','=',1)->get();
    
            $bands = NHOMNHACCASI::where('TrangThai','=',1)->paginate(3);
    
            return view('backend.pages.band_singer.band-singer', 
            [
                'TimKiem' => $TimKiem,
                'bands' => $bands,
            ]);
        }
    }
}
