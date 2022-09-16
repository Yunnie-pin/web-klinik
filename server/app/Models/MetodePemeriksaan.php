<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetodePemeriksaan extends Model
{
    use HasFactory;
    protected $table = 'metode_pemeriksaan';
    protected $fillable = ['nama'];
}
