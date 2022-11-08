<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Models\BidangPemeriksaan;
use Illuminate\Http\Request;

class BidangPemeriksaanController extends Controller
{
    public function getBidangPemeriksaan($id = null)
    {
        try {
            if (isset($id)) {
                $bidang = BidangPemeriksaan::where('id', $id)->first();
            } else {
                $bidang = BidangPemeriksaan::all();
            }
            return new PostResource(true, "data bidang ditemukan", $bidang);
        } catch (\Throwable $th) {
            return new PostResource(false, "data bidang tidak ada");
        }
    }
    public function addBidangPemeriksaan(Request $request)
    {
        $rules = [
            'bidang' => 'required'
        ];
        try {
            $data = [
                'bidang' => $request->bidang
            ];
            if (isset($request->id_bidang)) {
                return $this->updateBidangPemeriksaan($request);
            } else {
                $bidang = BidangPemeriksaan::create($data);
            }
            return new PostResource(true, "Bidang berhasil ditambahkan", $bidang);
        } catch (\Throwable $th) {
            return new PostResource(false, "Bidang gagal ditambahkan");
        }
    }
    public function updateBidangPemeriksaan(Request $request)
    {
        try {
            $data = [
                'bidang' => $request->bidang
            ];
            $bidang = BidangPemeriksaan::where('id', $request->id_bidang)->first();
            $bidang->update($data);
            return new PostResource(true, "Bidang berhasil diubah", $bidang);
        } catch (\Throwable $th) {
            return new PostResource(false, "Bidang gagal diubah");
        }
    }
    public function deleteBidangPemeriksaan(Request $request)
    {
        try {
            $bidang = BidangPemeriksaan::where('id', $request->id_bidang)->first();
            $bidang->delete();
            return new PostResource(true, "Data Bidang Pemeriksaan Berhasil dihapus", $bidang);
        } catch (\Throwable $th) {
            return new PostResource(false, "Data Bidang Pemeriksaan Gagal dihapus");
        }
    }
}
