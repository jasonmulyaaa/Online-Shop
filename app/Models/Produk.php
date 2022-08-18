<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'produk';
    protected $fillable = ['judul', 'harga', 'deskripsi', 'gambar1', 'gambar2', 'gambar3', 'gambar4', 'kategorigeneral', 'views', 'slider', 'promo', 'diskon'];
    use HasFactory;
}
