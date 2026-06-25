<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class items extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'kode_barang',
        'nama_barang',
        'stok',
    ];
}
