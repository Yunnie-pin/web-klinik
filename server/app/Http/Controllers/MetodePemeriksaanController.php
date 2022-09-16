<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Models\MetodePemeriksaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MetodePemeriksaanController extends Controller
{
    public function getMetodePemeriksaan($id = null)
    {
        try {
            if (isset($id)) {
                $metode = MetodePemeriksaan::where('id', $id)->first();
            } else {
                $metode = MetodePemeriksaan::all();
            }
            return new PostResource(true, "data metode ditemukan", $metode);
        } catch (\Throwable $th) {
            return new PostResource(false, "data metode tidak ada", $th->getMessage());
        }
    }
    public function addMetodePemeriksaan(Request $request)
    {
        try {
            if (isset($request->id_nama)) {
                return $this->updateMetodePemeriksaan($request);
            } else {
                $rules = [
                    'nama' => 'required'
                ];
                $validation = Validator::make($request->all(), $rules);
                if ($validation->fails()) {
                    return new PostResource(false, "metode gagal ditambahkan", $validation->errors()->all());
                }
                $data = [
                    'nama' => $request->nama
                ];
                $metode = MetodePemeriksaan::create($data);
            }
            return new PostResource(true, "metode berhasil ditambahkan", $metode);
        } catch (\Throwable $th) {
            return new PostResource(false, "metode gagal ditambahkan", $th->getMessage());
        }
    }
    public function updateMetodePemeriksaan(Request $request)
    {
        try {
            $data = [
                'nama' => $request->nama
            ];
            $metode = MetodePemeriksaan::where('id', $request->id_metode)->first();
            $metode->update($data);
            return new PostResource(true, "metode berhasil diubah", $metode);
        } catch (\Throwable $th) {
            return new PostResource(false, "metode gagal diubah", $th->getMessage());
        }
    }
    public function deleteMetodePemeriksaan(Request $request)
    {
        try {
            $metode = MetodePemeriksaan::where('id', $request->id_metode)->first();
            $metode->delete();
            return new PostResource(true, "Data Metode Pemeriksaan Berhasil dihapus", $metode);
        } catch (\Throwable $th) {
            return new PostResource(false, "Data Metode Pemeriksaan Gagal dihapus", $th->getMessage());
        }
    }
}
