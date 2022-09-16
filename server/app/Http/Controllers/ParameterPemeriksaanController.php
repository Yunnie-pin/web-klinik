<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Models\ParameterPemeriksaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ParameterPemeriksaanController extends Controller
{
    public function getParameterPemeriksaan($id = null)
    {
        try {
            if (isset($id)) {
                $parameterPemeriksaan = ParameterPemeriksaan::where('id', $id)->first();
            } else {
                $parameterPemeriksaan = ParameterPemeriksaan::all();
            }
            return new PostResource(true, "data parameter ditemukan", $parameterPemeriksaan);
        } catch (\Throwable $th) {
            return new PostResource(false, "data parameter tidak ada", $th->getMessage());
        }
    }
    public function addParameterPemeriksaan(Request $request)
    {
        try {
            if (isset($request->id_parameter)) {
                return $this->updateParameterPemeriksaan($request);
            } else {
                $rules = [
                    'parameter' => 'required'
                ];
                $validation = Validator::make($request->all(), $rules);
                if ($validation->fails()) {
                    return new PostResource(false, "parameter gagal ditambahkan", $validation->errors()->all());
                }
                $data = [
                    'bidang_id' => $request->bidang_id,
                    'parameter' => $request->parameter,
                    'nilai_rujukan' => $request->nilai_rujukan,
                    'metode_id' => $request->metode_id,
                    'satuan' => $request->satuan,
                    'harga' => $request->harga
                ];
                $paramterPemeriksaan = ParameterPemeriksaan::create($data);
            }
            return new PostResource(true, "parameter berhasil ditambahkan", $paramterPemeriksaan);
        } catch (\Throwable $th) {
            return new PostResource(false, "parameter gagal ditambahkan", $th->getMessage());
        }
    }
    public function updateParameterPemeriksaan(Request $request)
    {
        try {
            $data = [];
            if (isset($request->bidang_id)) {
                $data['bidang_id'] = $request->bidang_id;
            }
            if (isset($request->parameter)) {
                $data['parameter'] = $request->parameter;
            }
            if (isset($request->nilai_rujukan)) {
                $data['nilai_rujukan'] = $request->nilai_rujukan;
            }
            if (isset($request->metode_id)) {
                $data['metode_id'] = $request->metode_id;
            }
            if (isset($request->satuan)) {
                $data['satuan'] = $request->satuan;
            }
            if (isset($request->harga)) {
                $data['harga'] = $request->harga;
            }
            $paramterPemeriksaan = ParameterPemeriksaan::where('id', $request->id_parameter)->first();
            $paramterPemeriksaan->update($data);
            return new PostResource(true, "parameter berhasil diubah", $paramterPemeriksaan);
        } catch (\Throwable $th) {
            return new PostResource(false, "parameter gagal diubah", $th->getMessage());
        }
    }
    public function deleteParameterPemeriksaan(Request $request)
    {
        try {
            $parameterPemeriksaan = ParameterPemeriksaan::where('id', $request->id_parameter)->first();
            $parameterPemeriksaan->delete();
            return new PostResource(true, "Data Paramter Pemeriksaan Berhasil dihapus", $parameterPemeriksaan);
        } catch (\Throwable $th) {
            return new PostResource(false, "Data Paramter Pemeriksaan Gagal dihapus", $th->getMessage());
        }
    }
}
