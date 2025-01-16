<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\KhachHang;
use App\Models\SANPHAM;

class BinhLuan extends Model
{
    use SoftDeletes;
    protected $table = 'binhluan';

    protected $primaryKey = 'MaBL';

    protected $fillable = [
        'MaSP',
        'MaKH',
        'SoSao',
        'NoiDung',
    ];
    public function khachHang()
    {
        return $this->belongsTo(KhachHang::class, 'MaKH', 'MaKH');
    }
    public function SANPHAM()
    {
        return $this->belongsTo(SanPham::class, 'MaSP', 'MaSP'); 
    }
    protected $dates = ['deleted_at'];
}