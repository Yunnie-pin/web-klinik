<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ValidatorPemeriksaan extends Model
{
    use HasFactory;
    protected $table = 'validator_pemeriksaan';
    protected $fillable = ['nama', 'status'];
}
