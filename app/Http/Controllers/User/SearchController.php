<?php

namespace App\Http\Controllers\User;

use App\Models\SANPHAM;
use Illuminate\Http\Request;
use App\Models\BlOG;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;


class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('query');
        if ($query) {
            $blog = Blog::where('TieuDeBlog', 'LIKE', "%{$query}%")
                ->orWhere('NoiDung', 'LIKE', "%{$query}%")
                ->paginate(10);
        } else {
            $blog = Blog::paginate(4);
        }
        return view('frontend.pages.blog', compact('blog', 'query'));
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $filter = $request->input('filter');

        $products = SANPHAM::query();

        if (!empty($query)) {
            $slug = Str::slug($query, '-');
            $products->where('slug', 'LIKE', '%' . $slug . '%');
        }
        if (!empty($filter)) {
            $products->where('MaLoaiSP', '=', $filter);
        }

        // Nếu không có tìm kiếm và filter, trả về danh sách rỗng nhưng vẫn phân trang
        $products = $products->exists() ? $products->paginate(2) : SANPHAM::whereRaw('0 = 1')->paginate(4);

        return view('frontend.pages.search', compact('products', 'query', 'filter'));

    }

    /*public function show($slug)
    {
        // Tìm sản phẩm theo slug
        $product = Sanpham::where('slug', $slug)->first();

        if (!$product) {
            abort(404, 'Blog not found');
        }

        // Trả về view hoặc API response
        return view('frontend.pages.single-product-details', compact('product'));
    }*/

}