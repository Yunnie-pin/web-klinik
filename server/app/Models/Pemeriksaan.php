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

    public function user($id){
        return User::where('id',$id)->first();
    }

    public function pasien($id){
        return Pasien::where('id',$id)->first();
    }

    public function status($id){
        return Status::where('id',$id)->first();
    }

    public function validator($id){
        return ValidatorPemeriksaan::where('id',$id)->first();
    }
}
