<?php

namespace App\Http\Controllers\Admin;

use App\Models\KhachHang; 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class CustomerController extends Controller
{
    //Hiển thị danh sách khách hàng
    public function index(Request $request)
    {
        // Lấy tất cả khách hàng với phân trang, mỗi trang hiển thị 2 khách hàng
        $customer = KhachHang::paginate(5); 

        //truyền dữ liệu vào view
        return view( 'backend.pages.customer.customer-management', compact(var_name: 'customer'));  
    }

    public function destroy($id)
    {
        $customer = KhachHang::find($id);

        if ($customer) {
            $customer->delete(); // Xóa mềm
            return redirect()->route('customer.index')->with('success', 'Customer deleted successfully.');
        }

        return redirect()->route('customer.index')->with('error', 'Customer not found.');
    }


    public function updateStatus(Request $request, $id)
    {
        // Tìm khách hàng theo ID
        $customer = KhachHang::find($id);

        if ($customer) {
            // Cập nhật trạng thái
            $customer->TrangThai = $request->TrangThai;
            $customer->save();

            return redirect()->route('customer.index')->with('success', 'Status updated successfully!');
        }

        return redirect()->route('customer.index')->with('error', 'Customer not found!');
    }

}