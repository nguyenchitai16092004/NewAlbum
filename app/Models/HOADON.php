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
        'MaQL',
        'MaKH',
        'TongTien',
        'TrangThai',
        'PTTT',
        'TrangThaiTT',
        'DiaChi',
    ];
}
