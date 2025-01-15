<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class KHACHHANG extends Model
{
    //sử dụng SoftDelelte
    use SoftDeletes;

    // Chỉ định khóa chính là 'MaKH'
    protected $primaryKey = 'MaKH';
    
    protected $table = 'khachhang';

    protected $fillable = [
        'MaKH',
        'TenKH',
        'Email',
        'NgaySinh',
        'SDT',
        'TenDN',
        'MatKhau',
        'TrangThai',
        'GioiTinh',
        'HinhAnh',
        'DiaChiKH',
    ];

    protected $dates = ['deleted_at'];
}
