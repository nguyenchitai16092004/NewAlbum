<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\SANPHAM;
use App\Models\NHOMNHACCASI;
use App\Models\LOAISP;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    // Hiện danh sách sản phẩm
    public function Index()
    {
        $products = SANPHAM::leftJoin('LOAISP', 'SANPHAM.MaLoaiSP', '=', 'LOAISP.MaLoaiSP')
            ->leftJoin('NHOMNHACCASI', 'SANPHAM.MaNhomNhacCaSi', '=', 'NHOMNHACCASI.MaNhomNhacCaSi')
            ->where('SANPHAM.TrangThai', 1)
            ->select(
                'SANPHAM.*',
                'LOAISP.TenLoaiSP',
                'NHOMNHACCASI.TenNhomNhacCaSi'
            )
            ->paginate(3);

        return view('backend.pages.product.product', [
            'products' => $products
        ]);
    }
    //Hiện chi tiết sản phẩm
    public function Show()
    {
        $NhomNhacCaSi = NHOMNHACCASI::where('TrangThai', '=', '1')->get();
        $LoaiSP = LOAISP::where('TrangThai', '=', '1')->get();
        return view('backend.pages.product.add-product', [
            'Band' => $NhomNhacCaSi,
            'Category' => $LoaiSP,
        ]);
    }

    public function Show_Edit($id)
    {
        $products = SANPHAM::join('LOAISP', 'SANPHAM.MaLoaiSP', '=', 'LOAISP.MaLoaiSP', 'left')
            ->join('NHOMNHACCASI', 'SANPHAM.MaNhomNhacCaSi', '=', 'NHOMNHACCASI.MaNhomNhacCaSi', 'left')
            ->where(function ($query) use ($id) {
                $query->where('SANPHAM.MaSP', '=', $id)
                    ->whereNull('SANPHAM.MaLoaiSP')
                    ->orWhereNull('SANPHAM.MaNhomNhacCaSi');
            })
            ->select('SANPHAM.*', 'LOAISP.TenLoaiSP', 'NHOMNHACCASI.TenNhomNhacCaSi')
            ->first();

        $NhomNhacCaSi = NHOMNHACCASI::all();
        $LoaiSP = LOAISP::all();

        return view('backend.pages.product.edit-product', [
            'products' => $products,
            'Band' => $NhomNhacCaSi,
            'Category' => $LoaiSP,
        ]);
    }


    public function Add(Request $request)
    {
        $slug = Str::slug($request->TenSP, '-');

        $validated = $request->validate([
            'MaNhomNhacCaSi' => 'required|numeric',
            'MaSPGG' => 'nullable|numberic',
            'MaLoaiSP' => 'required|numeric',
            'TenSP' => 'required|string|max:255',
            'GiaNhap' => 'required|numeric|min:1',
            'GiaBan' => 'required|numeric|min:1',
            'TieuDe' => 'required|string|max:255',
            'MoTa' => 'required|string',
            'SoLuong' => 'required|integer',
            'LoaiHang' => 'required|boolean',
            'TrangThai' => 'nullable|boolean',
            'HinhAnh' => 'required|image|max:255',
        ]);
        $validated['Slug'] = $slug;
        if ($request->hasFile('HinhAnh')) {
            $HinhAnh = $request->file('HinhAnh');

            $TenHinhAnh = $HinhAnh->getClientOriginalName();

            $HinhAnh->move(public_path('storage/SanPham'), $TenHinhAnh);

            $validated['HinhAnh'] = $TenHinhAnh;
        }
        SANPHAM::create($validated);

        return redirect()->route('Index_Product')->with('success', 'Product added successfully!');
    }

    public function Delete($id)
    {
        $products = SANPHAM::findOrFail($id);
        $products->TrangThai = 0;
        $products->save();

        return redirect()->route('Index_Product')->with('success', 'Product deleted successfully!');
    }


    public function Edit(Request $request, $id)
    {
        $products = SANPHAM::findOrFail($id);

        // Gán giá trị từ request vào sản phẩm
        $products->MaNhomNhacCaSi = $request->input('MaNhomNhacCaSi');
        $products->MaLoaiSP = $request->input('MaLoaiSP');
        $products->MaSPGG = $request->input('MaSPGG');
        $products->TenSP = $request->input('TenSP');
        $products->GiaNhap = $request->input('GiaNhap');
        $products->GiaBan = $request->input('GiaBan');
        $products->TieuDe = $request->input('TieuDe');
        $products->MoTa = $request->input('MoTa');
        $products->SoLuong = $request->input('SoLuong');

        if ($request->hasFile('HinhAnh')) {
            $HinhAnh = $request->file('HinhAnh');
            $TenHinhAnh = $HinhAnh->getClientOriginalName();
            $HinhAnh->move(public_path('storage/SanPham'), $TenHinhAnh);

            $products->HinhAnh = $TenHinhAnh;
        }

        $products->save();

        return redirect()->route('Index_Product')->with('success', 'Product updated successfully!');
    }

    public function Search(Request $request)
    {
        $search = $request->input('search');

        if (empty($search)) {
            $products = SANPHAM::join('LOAISP', 'SANPHAM.MaLoaiSP', '=', 'LOAISP.MaLoaiSP')
                ->join('NHOMNHACCASI', 'SANPHAM.MaNhomNhacCaSi', '=', 'NHOMNHACCASI.MaNhomNhacCaSi')
                ->where('SANPHAM.TrangThai', '=', 1)
                ->select(
                    'SANPHAM.*',
                    'LOAISP.TenLoaiSP',
                    'NHOMNHACCASI.TenNhomNhacCaSi'
                )
                ->paginate(3);

            return view('backend.pages.product.product', ['products' => $products]);
        } else {
            $TimKiem = SANPHAM::join('LOAISP', 'SANPHAM.MaLoaiSP', '=', 'LOAISP.MaLoaiSP')
                ->join('NHOMNHACCASI', 'SANPHAM.MaNhomNhacCaSi', '=', 'NHOMNHACCASI.MaNhomNhacCaSi')
                ->where($request->input('filter'), 'LIKE', '%' . $search . '%')->where('SANPHAM.TrangThai', '=', 1)
                ->select(
                    'SANPHAM.*',
                    'LOAISP.TenLoaiSP',
                    'NHOMNHACCASI.TenNhomNhacCaSi'
                )->get();

            $products = SANPHAM::join('LOAISP', 'SANPHAM.MaLoaiSP', '=', 'LOAISP.MaLoaiSP')
                ->join('NHOMNHACCASI', 'SANPHAM.MaNhomNhacCaSi', '=', 'NHOMNHACCASI.MaNhomNhacCaSi')
                ->where('SANPHAM.TrangThai', '=', 1)
                ->select(
                    'SANPHAM.*',
                    'LOAISP.TenLoaiSP',
                    'NHOMNHACCASI.TenNhomNhacCaSi'
                )
                ->paginate(3);

            return view(
                'backend.pages.product.product',
                [
                    'TimKiem' => $TimKiem,
                    'products' => $products,
                ]
            );
        }
    }
}