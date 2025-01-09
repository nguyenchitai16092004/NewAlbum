<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BLOG extends Model
{
    protected $table = 'BLOG';
    protected $primaryKey = 'MaBL';

    public $incrementing = true;

    protected $keyType = 'int';

    protected $fillable = [
        'MaQL',
        'TieuDeBlog',
        'NoiDung',
        'HinhAnh',
        'TrangThai'
    ];
}
