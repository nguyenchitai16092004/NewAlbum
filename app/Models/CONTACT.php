<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CONTACT extends Model
{
    use HasFactory;

    protected $table = 'lienhe';

    protected $primaryKey = 'MaLH';
    protected $fillable = ['Ten', 'SDT', 'Email', 'TinNhan'];
}