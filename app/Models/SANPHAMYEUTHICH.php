<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SANPHAMYEUTHICH extends Model
{
    use HasFactory;

    protected $table = 'sanphamyeuthich';

    public $incrementing = false;
    protected $keyType = 'int';

    protected $fillable = [
        'MaKH',
        'MaSP',
        'HinhAnh',
    ];


    public function khachHang()
    {
        return $this->belongsTo(KhachHang::class, 'MaKH', 'MaKH');
    }

    public function sanPham()
    {
        return $this->belongsTo(SANPHAM::class, 'MaSP', 'MaSP');
    }
}
