<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meta extends Model
{
    protected $table = 'metamanagement';
    protected $fillable = ['deskripsi', 'search_engine', 'keywords', 'author', 'website'];
    use HasFactory;
}
