<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HOADON extends Model
{
    use HasFactory;

    protected $table = 'HOADON';

    protected $primaryKey = 'MaHD';

    protected $fillable = [
        'MaHD',
        'MaKH',
        'TongTien',
        'TrangThai',
        'PTTT',
        'TrangThaiTT',
        'DiaChi',
    ];
    
    public function khachHang()
    {
        return $this->belongsTo(KhachHang::class, 'MaKH', 'MaKH');
    }

    public function CTHD()
    {
        return $this->hasMany(CHITIETHOADON::class, 'MaHD', 'MaHD');
    }
    
}