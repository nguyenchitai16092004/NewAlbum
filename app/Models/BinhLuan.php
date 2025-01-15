<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\KhachHang;

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
    protected $dates = ['deleted_at'];
}