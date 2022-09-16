<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemeriksaan extends Model
{
    use HasFactory;
    protected $table = 'pemeriksaan';
    protected $fillable = [
        'pasien_id',
        'parameter_id',
        'bidang_id',
        'status_id',
        'validator_id',
        'hasil',
        'kesan',
        'catatan'
    ];
}
