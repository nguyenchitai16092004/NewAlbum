<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Kiểm tra đã đăng nhập chưa
        if (!Auth::check() || !session('is_logged_in', false)) {
            session()->forget([
                'user_id',
                'user_name',
                'user_fullname',
                'user_email',
                'user_role',
                'login_time',
                'is_logged_in'
            ]);
            return redirect('/admin')->with('error', 'Bạn cần đăng nhập để truy cập!');
        }

        $user = Auth::user();

        // Kiểm tra trạng thái tài khoản
        if (!$user->TrangThai) {
            Auth::logout();
            session()->flush();
            return redirect('/admin')->with('error', 'Tài khoản của bạn đã bị vô hiệu hóa!');
        }

        // Kiểm tra phân quyền dựa trên ChucVu
        $chucVu = strtolower($user->ChucVu);

        // Nếu không phải admin hoặc nhân viên thì không được vào admin
        if (!in_array($chucVu, ['admin', 'nhanvien'])) {
            return redirect('/')->with('error', 'Bạn không có quyền truy cập khu vực quản trị!');
        }

        // Nếu là nhân viên nhưng cố truy cập phần cấm
        if ($chucVu === 'nhanvien' && $request->is('admin/khach-hang*')) {
            return redirect('/admin')->with('error', 'Bạn không có quyền truy cập thông tin khách hàng!');
        }

        // Cập nhật thời gian hoạt động cuối
        session(['last_activity' => now()->format('Y-m-d H:i:s')]);

        return $next($request);
    }
}
