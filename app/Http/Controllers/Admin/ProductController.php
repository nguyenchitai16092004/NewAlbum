<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\SANPHAM;
use App\Models\NHOMNHACCASI;
use App\Models\LOAISP;
use App\Models\CHITIETKHO;
use App\Models\KHOHANG;
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
        $khohangs = KHOHANG::where('TrangThai', 1)->get();
        return view('backend.pages.product.add-product', [
            'Band' => $NhomNhacCaSi,
            'Category' => $LoaiSP,
            'Warehouses' => $khohangs,
        ]);
    }

   public function Show_Edit($id)
    {
        $products = SANPHAM::join('LOAISP', 'SANPHAM.MaLoaiSP', '=', 'LOAISP.MaLoaiSP', 'left')
            ->join('NHOMNHACCASI', 'SANPHAM.MaNhomNhacCaSi', '=', 'NHOMNHACCASI.MaNhomNhacCaSi', 'left')
            ->where('SANPHAM.MaSP', '=', $id)
            ->select('SANPHAM.*', 'LOAISP.TenLoaiSP', 'NHOMNHACCASI.TenNhomNhacCaSi')
            ->first();

        $NhomNhacCaSi = NHOMNHACCASI::where('TrangThai', '=', 1)->get();
        $LoaiSP = LOAISP::where('TrangThai', '=', 1)->get();
        $khohangs = KHOHANG::where('TrangThai', 1)->get();
        $chiTietKho = CHITIETKHO::join('KhoHang', 'KhoHang.MaKho', '=', 'sanpham_khohang.MaKho')
                         ->where('MaSP', $id)
                         ->get();


        return view('backend.pages.product.edit-product', [
            'products' => $products,
            'Band' => $NhomNhacCaSi,
            'Category' => $LoaiSP,
            'chiTietKho' =>  $chiTietKho,
            'Warehouses' => $khohangs,
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
        $sanpham = SANPHAM::create($validated);

        // Đồng bộ dữ liệu sang CHITIETKHO
        foreach ($request->khos ?? [] as $khoId => $data) {
            if (isset($data['checked']) && isset($data['SoLuong']) && $data['SoLuong'] > 0) {
                CHITIETKHO::create([
                    'MaSP' => $sanpham->MaSP,
                    'MaKho' => $khoId,
                    'SoLuongTon' => $data['SoLuong'],
                    'GiaNhap' => $validated['GiaNhap'],
                    'GiaBan' => $validated['GiaBan'],
                ]);
            }
        }
        $khos = $request->input('khos', []);

        $rules = [];

        foreach ($khos as $maKho => $data) {
            if (isset($data['checked']) && $data['checked'] == 1) {
                // Nếu kho được chọn thì số lượng phải tồn tại và >= 1
                $rules["khos.$maKho.SoLuong"] = 'required|integer|min:1';
            }
        }

        $messages = [
            'required' => 'Bạn phải nhập số lượng cho kho được chọn.',
            'integer' => 'Số lượng phải là số nguyên.',
            'min' => 'Số lượng phải lớn hơn hoặc bằng 1.',
        ];

        $validated = $request->validate($rules, $messages);

        return redirect()->route('Index_Product')->with('success', 'Product added successfully!');
    }

    public function Delete($id)
    {
        $product = SANPHAM::findOrFail($id);
        $product->TrangThai = 0;
        $product->save();

        CHITIETKHO::where('MaSP', $product->MaSP)->delete();

        return redirect()->route('Index_Product')->with('success', 'Product deleted successfully!');
    }


    public function Edit(Request $request, $id)
    {
        $products = SANPHAM::findOrFail($id);

        if ($request->input('SoLuong') < 1 && $request->input('LoaiHang') == 0) {
            return redirect()->route('Edit_Index_Product', $id)->with('error', 'Invalid input!');
        }

        // Gán các giá trị cơ bản từ request vào sản phẩm
        $products->MaNhomNhacCaSi = $request->input('MaNhomNhacCaSi');
        $products->MaLoaiSP = $request->input('MaLoaiSP');
        $products->MaSPGG = $request->input('MaSPGG');
        $products->TenSP = $request->input('TenSP');
        $products->GiaNhap = $request->input('GiaNhap');
        $products->GiaBan = $request->input('GiaBan');
        $products->TieuDe = $request->input('TieuDe');
        $products->MoTa = $request->input('MoTa');
        $products->LoaiHang = $request->input('LoaiHang');

        // Nếu dữ liệu kho hàng tồn tại, tính tổng số lượng để gán
        if ($request->has('warehouses')) {
            $tongSoLuong = array_sum(array_column($request->input('warehouses'), 'SoLuong'));
            $products->SoLuong = $tongSoLuong;
        }


        // Xử lý hình ảnh nếu có
        if ($request->hasFile('HinhAnh')) {
            $HinhAnh = $request->file('HinhAnh');
            $TenHinhAnh = $HinhAnh->getClientOriginalName();
            $HinhAnh->move(public_path('storage/SanPham'), $TenHinhAnh);

            $products->HinhAnh = $TenHinhAnh;
        }

        $products->save();

        // Sync warehouse quantities
        if ($request->has('warehouses')) {
            $warehouseData = [];

            foreach ($request->input('warehouses') as $warehouseId => $details) {
                $warehouseData[$warehouseId] = ['SoLuong' => $details['SoLuong']];
            }

            $products->warehouses()->sync($warehouseData);
        }

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