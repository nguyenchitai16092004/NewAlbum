<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

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

    protected $dates = ['deleted_at'];
}
