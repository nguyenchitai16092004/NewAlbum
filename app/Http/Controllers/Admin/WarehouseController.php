<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WarehouseController extends Controller
{
    public function Index()
    {
        // Logic để hiển thị danh sách kho hàng
        $warehouses = []; // Thay bằng logic lấy dữ liệu từ database
        return view('backend.pages.warehouse', compact('warehouses'));
    }

}
