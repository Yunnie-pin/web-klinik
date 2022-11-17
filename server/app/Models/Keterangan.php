<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keterangan extends Model
{
    use HasFactory;
    protected $table = 'keterangan_pemeriksaan';
    protected $fillable = [
        'pemeriksaan_id',
        'bidang_id',
        'parameter_id',
        'metode_id',
        'hasil',
        'kesan',
        'catatan'
    ];
}
