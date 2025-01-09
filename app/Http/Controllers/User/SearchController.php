<?php

namespace App\Http\Controllers\User;

use App\Models\SANPHAM;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Http\Controllers\Controller;


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
        // Lấy từ khóa tìm kiếm từ query string
        $query = $request->input('query');

        // Kiểm tra nếu người dùng không nhập gì trong ô tìm kiếm
        if (!$query) {
            // Nếu không có từ khóa, trả về thông báo "Not Found"
            return view('search', ['products' => [], 'query' => '', 'message' => 'Please enter search keywords.']);
        }

        // Tìm các sản phẩm có slug chứa từ khóa tìm kiếm
        $products = SANPHAM::whereRaw('LOWER(slug) LIKE ?', ['%' . strtolower($query) . '%'])->get();


        // Trả về view và truyền kết quả tìm kiếm
        return view('frontend.pages.search', compact('products', 'query'));
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

