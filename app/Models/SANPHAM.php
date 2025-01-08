<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SANPHAM extends Model
{
    protected $table = 'SANPHAM';
    protected $primarykey = 'MaSP';

    protected $fillable = [
        'MaNhomNhacCaSi',
        'MaSPGG',
        'MaLoaiSP',
        'TenSP',
        'GiaNhap',
        'GiaBan',
        'TieuDe',
        'MoTa',
        'SoLuong',
        'LoaiHang',
        'TrangThai',
        'LuotXem',
        'Slug',
        'HinhAnh',
    ];

    public function loaiSanPham() {
        return $this->belongsTo(LOAISP::class, 'MaLoaiSP','MaLoaiSP');
    }
    public function nhomNhacCaSi()
    {
        return $this->belongsTo(NHOMNHACCASI::class, 'MaNhomNhacCaSi', 'MaNhomNhacCaSi');
    }

    public function sanPhamGiamGia()
    {
        return $this->belongsTo(SANPHAMGIAMGIA::class, 'MaSPGG', 'MaSPGG');
    }
}
