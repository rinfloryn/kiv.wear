<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    // Nama tabel (opsional, tapi aman)
    protected $table = 'produks';

    // Field yang boleh diisi (mass assignment)
    protected $fillable = [
        'nama_produk',
        'harga',
        'deskripsi',
        'gambar',
    ];
}
