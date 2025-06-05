<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KhoHang extends Model
{
    protected $table = 'khohang'; // tên bảng (chú ý viết đúng như DB, thường không viết hoa)
    protected $primaryKey = 'MaKho'; // khóa chính

    protected $fillable = [
        'MaQL',
        'NgayNhap',
        'NgayXuat',
        'DiaChi',
        'TenKho',
        'TrangThai',
    ];

    /**
     * Nếu bạn có mối quan hệ với bảng QuanLy (MaQL → QuanLy.MaQL)
     */
    public function quanLy()
    {
        return $this->belongsTo(QuanLy::class, 'MaQL', 'MaQL');
    }
}
