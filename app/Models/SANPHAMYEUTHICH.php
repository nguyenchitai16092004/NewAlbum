<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SANPHAMYEUTHICH extends Model
{
    protected $table = 'sanphamyeuthich';
    
    use HasFactory;

    protected $fillable = [
        'MaKH', 
        'MaSP',
        'HinhAnh',
    ];

    public function khachHang()
    {
        return $this->belongsTo(KhachHang::class);
    }

    public function sanPham()
    {
        return $this->belongsTo(SANPHAM::class);
    }
}
