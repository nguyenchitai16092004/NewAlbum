<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BinhLuan extends Model
{
    use SoftDeletes; // Thêm SoftDeletes

    protected $table = 'binhluan';

    protected $primaryKey = 'id';

    protected $fillable = [
        'MaSP',
        'MaKH',
        'SoSao',
        'NoiDung',
    ];

    protected $dates = ['deleted_at']; // Định nghĩa cột deleted_at
}
