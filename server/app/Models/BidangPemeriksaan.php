<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BidangPemeriksaan extends Model
{
    use HasFactory;
    protected $table = 'bidang_pemeriksaan';
    protected $fillable = ['bidang'];
}
