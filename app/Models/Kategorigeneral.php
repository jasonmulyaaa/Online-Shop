<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategorigeneral extends Model
{
    protected $table = 'kategorigeneral';
    protected $fillable = ['kategorigeneral', 'icon'];
    use HasFactory;
}
