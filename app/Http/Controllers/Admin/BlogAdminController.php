<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BLOG;
use App\Models\QUANLY;
use Illuminate\Contracts\View\View;
use Illuminate\Routing\Route;

class BlogAdminController extends Controller
{
    public function Index()
    {
        $blogs = BLOG::join('QUANLY', 'Blog.MaQL', '=', 'QUANLY.MaQL')
            ->select('Blog.*', 'QUANLY.TenQL')
            ->paginate(3);

        return view('backend.pages.blog.blog-management', compact('blogs'));
    }

    public function Add(Request $request)
    {
        $validated = $request->validate([
            'MaQL' => 'nullable|numeric',
            'TieuDeBlog' => 'required|max:255',
            'NoiDung' => 'required|max:10000',
            'HinhAnh' => 'nullable|image|max:2048',
        ]);

        $validated['MaQL'] = session('Admin');

        if ($request->hasFile('HinhAnh')) {
            $HinhAnh = $request->file('HinhAnh');
            $TenHinhAnh = $HinhAnh->getClientOriginalName();
            $HinhAnh->move(public_path('storage/Blog'), $TenHinhAnh);
            $validated['HinhAnh'] = $TenHinhAnh;
        }

        BLOG::create($validated);
        return redirect()->route('Index_Blog_Management')->with('success', 'Blog added successfully!');
    }

    public function Show($id)
    {
        $blog = BLOG::findOrFail($id);
        return View('backend.pages.blog.edit-blog' ,compact('blog'));
    }

    public function Edit(Request $request , $id)
    {
        $blog = BLOG::findOrFail($id);  
        $blog->TieuDeBlog = $request->input('TieuDeBlog');
        $blog->NoiDung = $request->input('NoiDung');

        if ($request->hasFile('HinhAnh')) {
            $HinhAnh = $request->file('HinhAnh');
            $TenHinhAnh = $HinhAnh->getClientOriginalName();
            $HinhAnh->move(public_path('storage/Blog'), $TenHinhAnh);
            $blog->HinhAnh = $TenHinhAnh;
        }
        $blog->save();

        return redirect()->route('Index_Blog_Management')->with('success', 'Product edit successfully!');;
    }

    public function Delete($id){
        $blog = BLOG::findOrFail($id);  
        $blog->TrangThai = 0;
        $blog->save();

        return redirect()->route('Index_Blog_Management')->with('success', 'Product deleted successfully!');
    }
}
