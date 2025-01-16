<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CHITIETHOADON extends Model
{
    protected $table = 'CHITIETHOADON';

    // Tắt timestamps nếu không dùng
    public $timestamps = false;

    // Sử dụng khóa chính tự động tăng thay vì khóa phức hợp
    protected $primaryKey = 'MaSP,MaHD';

    protected $fillable = [
        'MaHD',
        'MaSP',
        'SoLuong',
        'DonGia',
        'TongTien',
    ];

    // Kiểu dữ liệu của các cột
    protected $casts = [
        'DonGia' => 'decimal:2',
        'TongTien' => 'decimal:2',
        'TrangThaiBL' => 'boolean',
    ];

    // Liên kết với bảng HOADON
    public function hoaDon()
    {
        return $this->belongsTo(HOADON::class, 'MaHD', 'MaHD');
    }
}
