<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konfigurasi extends Model
{
    protected $table = 'konfigurasi';
    protected $fillable = ['title', 'favicon', 'metadata', 'logo_header', 'logo_footer', 'alamat', 'deskripsi', 'no_telp', 'email'];
    use HasFactory;
}
