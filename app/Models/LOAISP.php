<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LOAISP extends Model
{
    protected $table = 'LOAISP';

    protected $primaryKey = 'MaLoaiSP';

    public $incrementing = true;

    protected $keyType = 'int';

    protected $fillable = [
        'TenLoaiSP',
    ];
}
