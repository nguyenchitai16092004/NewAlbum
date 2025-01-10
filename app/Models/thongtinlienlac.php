<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class thongtinlienlac extends Model
{
    protected $table = 'thongtinlienlac';

    protected $fillable = [
        'Email',
        'Facebook',
        'Instagram',
        'Twitter',
        'SDT',
    ];
}
