<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CHITIETKHO extends Model
{
    protected $table = 'sanpham_khohang'; // tên bảng, nhớ viết đúng với DB

    public $timestamps = false; // không có created_at, updated_at

    protected $primaryKey = null; // không có primary key đơn

    public $incrementing = false; // không tự tăng khóa

    protected $fillable = [
        'MaSP',
        'MaKho',
        'SoLuongTon',
        'GiaNhap',
        'GiaBan',
    ];

    /**
     * Quan hệ với bảng SANPHAM
     */
    public function sanPham()
    {
        return $this->belongsTo(SANPHAM::class, 'MaSP', 'MaSP');
    }

    /**
     * Quan hệ với bảng KHOHANG
     */
    public function khoHang()
    {
        return $this->belongsTo(KhoHang::class, 'MaKho', 'MaKho');
    }
}
