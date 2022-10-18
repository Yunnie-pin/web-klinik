<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ParameterPemeriksaan extends Model
{
    use HasFactory;
    protected $table = 'parameter_pemeriksaan';
    protected $fillable = [
        'bidang_id',
        'parameter',
        'nilai_rujukan',
        'metode_id',
        'satuan',
        'harga'
    ];
}
