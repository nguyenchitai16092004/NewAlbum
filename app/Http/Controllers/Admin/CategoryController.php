<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use App\Models\LOAISP;
use App\Models\SANPHAM;

use function Laravel\Prompts\search;

class CategoryController extends Controller
{
    //Xem danh sách sản phẩm
    public function Index()
    {
        $categories = LOAISP::where('TrangThai', '=', 1)->paginate(3);
        return view('backend.pages.category.category', compact('categories'));
    }

    //Xem chi tiết loại sản phẩm
    public function Show($id)
    {
        $categories = LOAISP::findOrFail($id);
        return view('backend.pages.category.edit-category', compact('categories'));
    }

    //Thêm loại sản phẩm
    public function Add(Request $request)
    {
        $sp = LOAISP::where('TrangThai', '=', 1)->where('TenLoaiSP' , 'LIKE' , $request->input('TenLoaiSP'));

        if( $sp->count() == 0){
            $slug = Str::slug($request->TenLoaiSP, '-');
            $request->validate([
                'TenLoaiSP' => 'required|string|max:255',
                'Slug'=> 'requied|string|max:255'
            ]);
    
            $categories = new LOAISP();
            $categories->TenloaiSP = $request->input('TenLoaiSP');
            $categories->Slug = $slug;
            $categories->save();
    
            return redirect()->route('Index_Category')->with('success','add successful product categories');
        }
        else{
            return redirect()->route('Index_Category')->with('error','This category already exists');
        }
    }
    

    //Xóa loại sản phẩm
    public function Delete($id)
    {
        $categories = LOAISP::findOrFail($id);
        $categories->TrangThai = 0;
        $categories->save();

        SANPHAM::where('MaLoaiSP', '=', $id)->update(['MaLoaiSP' => null]);
        
        return redirect()->route('Index_Category')->with('error','Delete category successfully');
    }

    //Sửa loại sản phẩm
    public function Edit(Request $request, $id)
    {
        $slug = Str::slug($request->input('TenloaiSP'), '-');
        $categories = LOAISP::findOrFail($id);
        $categories->TenloaiSP = $request->input('TenloaiSP');
        $categories->Slug = $slug;
        $categories->save();
        return redirect()->route('Index_Category')->with('success','Update category successfully');
    }

    //Tìm kiếm sản phẩm
    public function Search(Request $request)
    {
        $search = $request->input('search');

        if (empty($search)) {
            $categories = LOAISP::where('TrangThai', '=', 1)->paginate(3);
            return view('backend.pages.category.category', ['categories' => $categories]);
        } else {
            $TimKiem = LOAISP::where('TenLoaiSP', 'LIKE', '%' . $search . '%')->where('TrangThai','=',1)->get();

            $categories = LOAISP::where('TrangThai', '=', 1)->paginate(3);

            return view(
                'backend.pages.category.category',
                [
                    'TimKiem' => $TimKiem,
                    'categories' => $categories,
                ]
            );
        }
    }
}
