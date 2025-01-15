<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StatisticsController extends Controller
{
    public function Index()
    {
        // Thống kê doanh thu theo từng tháng
        $doanhThuThang = DB::table('HOADON')
            ->selectRaw('MONTH(created_at) as month, SUM(TongTien) as doanh_thu')
            ->groupBy('month')
            ->get();

        // Thống kê lượt mua theo từng tháng
        $luotMuaThang = DB::table('HOADON')
            ->selectRaw('MONTH(created_at) as month, COUNT(*) as so_luot_mua')
            ->groupBy('month')
            ->get();


        return view('backend.pages.statistics.statistics', compact('doanhThuThang', 'luotMuaThang'));
    }
}
