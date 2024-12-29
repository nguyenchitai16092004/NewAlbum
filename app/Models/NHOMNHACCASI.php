<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NHOMNHACCASI extends Model
{
    use HasFactory;

    protected $table = 'NHOMNHACCASI';

    protected $primaryKey = 'MaNhomNhacCaSi';

    public $incrementing = true;

    protected $keyType = 'int';

    protected $fillable = [
        'TenNhomNhacCaSi',
        'GioiTinh',
        'Loai',
    ];
}
