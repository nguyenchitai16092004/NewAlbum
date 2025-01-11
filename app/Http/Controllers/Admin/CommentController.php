<?php

namespace App\Http\Controllers\Admin;

use App\Models\BinhLuan; 
use App\Models\KhachHang;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class CommentController extends Controller
{
    // Hiển thị danh sách bình luận
    public function index(Request $request)
    {
        $query = BinhLuan::query();

        // Lọc theo số sao nếu có
        if ($request->has('stars')) {
            $query->where('SoSao', $request->input('stars'));
        }

        // Sắp xếp theo ngày nếu có
        if ($request->has('date_sort')) {
            if ($request->input('date_sort') == 'date_asc') {
                $query->orderBy('created_at', 'asc');
            } elseif ($request->input('date_sort') == 'date_desc') {
                $query->orderBy('created_at', 'desc');
            }
        }

        // Lấy kết quả với phân trang
        $comments = $query->paginate(4);

        // Truyền dữ liệu vào view
        return view('backend.pages.comments.comments-management', compact('comments'));
    }


    // Xóa bình luận
    public function destroy($id)
    {
        $comment = BinhLuan::find($id);

        if ($comment) {
            $comment->delete(); // Xóa mềm
            return redirect()->route('comments.index')->with('success', 'Comment soft-deleted successfully.');
        }

        return redirect()->route('comments.index')->with('error', 'Comment not found.');
    }

    // Cập nhật trạng thái
    public function updateStatus(Request $request, $id)
    {
        $customer = KhachHang::find($id);

        if ($customer) {
            $customer->TrangThai = $request->TrangThai; // Lấy trạng thái mới từ form
            $customer->save();

            return redirect()->route('customer.index')->with('success', 'Status updated successfully.');
        }

        return redirect()->route('customer.index')->with('error', 'Customer not found.');
    }
}