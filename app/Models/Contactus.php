<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contactus extends Model
{
    protected $table = 'contactus';
    protected $fillable = ['nama', 'subjek', 'keterangan'];
    use HasFactory;
}
