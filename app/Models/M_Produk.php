<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;
class M_Produk extends Model
{
    use softDeletes;

    protected $table = 'produk';
    protected $fillable = [
        'brand',
        'nama',
        'exp',
    ];

    protected $hidden;
}
