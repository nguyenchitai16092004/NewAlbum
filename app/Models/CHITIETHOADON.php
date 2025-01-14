<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CHITIETHOADON extends Model
{
    protected $table = 'CHITIETHOADON';

    // Khóa chính
    protected $primaryKey = ['MaHD', 'MaSP'];
    public $incrementing = false;

    protected $fillable = [
        'MaHD',
        'MaSP',
        'SoLuong',
        'TenSP',
        'DonGia',
        'TongTien',
        'HinhAnh',
        'TrangThaiBL',
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
        return $this->belongsTo(HoaDon::class, 'MaHD', 'MaHD');
    }

    // Liên kết với bảng SANPHAM
    public function sanPham()
    {
        return $this->belongsTo(SanPham::class, 'MaSP', 'MaSP');
    }
}