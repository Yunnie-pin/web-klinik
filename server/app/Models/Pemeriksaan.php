<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemeriksaan extends Model
{
    use HasFactory;
    protected $table = 'pemeriksaan';
    protected $fillable = [
        'user_id',
        'pasien_id',
        'status_id',
        'validator_pemeriksaan_id',
    ];

    public function user(){
        return $this->hasOne(User::class,'id','user_id');
    }

    public function pasien(){
        return $this->hasOne(Pasien::class,'id','pasien_id');
    }

    public function keterangan(){
        return $this->hasMany(Keterangan::class,'pemeriksaan_id','id'); 
    }

    public function status(){
        return $this->hasOne(Status::class,'id','status_id');
    }

    public function validator(){
        return $this->hasOne(ValidatorPemeriksaan::class,'id','validator_pemeriksaan_id');
    }
}
