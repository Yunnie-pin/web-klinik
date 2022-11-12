<?php

namespace App\Http\Controllers;

use App\Models\BidangPemeriksaan;
use App\Models\Keterangan;
use App\Models\ParameterPemeriksaan;
use Illuminate\Http\Request;

class KeteranganController extends Controller
{
    public static function get($pemeriksaan_id){
        try {
            $data = json_decode(Keterangan::where('pemeriksaan_id',$pemeriksaan_id)->get());
            self::detailed($data);
            return $data;
        } catch (\Throwable $th) {
            return null;
        }
    }

    public static function create($pemeriksaan_id,$data){
        try {
            $out = [];
            foreach($data as $d){
                array_push($out,Keterangan::create($d));
            }
            return $out;
        } catch (\Throwable $th) {
            return false;
        }
    }

    public static function update($id,$data){
        try {
            $keterangan = Keterangan::where('id',$id)->first();
            $keterangan->update($data);
            return $keterangan;
        } catch (\Throwable $th) {
            return false;
        }
    }

    public static function delete($id){
        try {
            return Keterangan::where('id',$id)->first()->delete();
        } catch (\Throwable $th) {
            return false;
        }
    }

    private static function detailed($data){
        foreach($data as $d){
            $d->bidang = BidangPemeriksaan::where('id',$d->bidang_id)->first();
            $d->parameter = ParameterPemeriksaan::where('id',$d->parameter_id)->first();
        }
    }
}
