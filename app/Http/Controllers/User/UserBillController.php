<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HOADON;

class UserBillController extends Controller
{
    /**
     * Display order history for a user.
     */
    public function index($id)
    {
        $hoaDons = HOADON::where('MaKH', '=', $id)
        ->where('TrangThai' , '>' , -2)
        ->get();

        return view('frontend.pages.oder-history', [
            'hoaDons' => $hoaDons
        ]);
    }

    /**
     * Cancel an order.
     */
    public function cancel($id)
    {
        // Fetch the order belonging to the authenticated user
        $hoaDon = HOADON::where('MaHD', '=' , $id)
                        ->first();

        if (!$hoaDon) {
            return redirect()->route('hoa_don_history', ['id' => session('User')])
                             ->with('error', 'Order not found or unauthorized access.');
        }

        // Check if the order status allows cancellation
        if ($hoaDon->TrangThai != 0) { 
            return redirect()->route('hoa_don_history', ['id' => session('User')])
                             ->with('error', 'Only pending orders can be canceled.');
        }

        // Update the status to canceled
        $hoaDon->TrangThai = -1; // Assuming -1 is the status for "canceled"
        $hoaDon->save();

        return redirect()->route('hoa_don_history', ['id' => session('User')])
                    ->with('message', 'Order has been canceled successfully.');
    }
}
