<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Models\BidangPemeriksaan;
use App\Models\ParameterPemeriksaan;
use App\Models\Pasien;
use App\Models\Pemeriksaan;
use App\Models\ValidatorPemeriksaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PemeriksaanController extends Controller
{
    public function getPemeriksaan($id = null)
    {
        try {
            if (isset($id)) {
                $periksa = Pemeriksaan::where('id', $id)->first();
            } else {
                $periksa = Pemeriksaan::all();
            }
            return new PostResource(true, "data pemeriksaan ditemukan", $periksa);
        } catch (\Throwable $th) {
            return new PostResource(false, "data pemeriksaan tidak ada", $th->getMessage());
        }
    }
    public function addPemeriksaan(Request $request)
    {
        try {
            if (isset($request->id_pemeriksaan)) {
                return $this->updatePemeriksaan($request);
            } else {
                $rules = [
                    'pasien_id' => 'required',
                    'parameter_id' => 'required',
                    'bidang_id' => 'required',
                    'status_id' => 'required',
                    'validator_id' => 'required',
                    'hasil' => 'required',
                ];
                $validator = Validator::make($request->all(), $rules);
                if ($validator->fails()) {
                    return new PostResource(false, $validator->errors()->all());
                }
                $pasien = Pasien::where('id', $request->pasien_id)->first();
                if (!$pasien) {
                    return new PostResource(false, "Pasien tidak ditemukan");
                }
                $parameter = ParameterPemeriksaan::where('id', $request->parameter_id)->first();
                if (!$parameter) {
                    return new PostResource(false, "Parameter Pemeriksaan tidak ditemukan");
                }
                $bidang = BidangPemeriksaan::where('id', $request->bidang_id)->first();
                if (!$bidang) {
                    return new PostResource(false, "Bidang Pemeriksaan tidak ditemukan");
                }
                $validator = ValidatorPemeriksaan::where('id', $request->validator_id)->first();
                if (!$validator) {
                    return new PostResource(false, "Validator Pemeriksaan tidak ditemukan");
                }
                $data = [
                    'pasien_id' => $request->pasien_id,
                    'parameter_id' => $request->parameter_id,
                    'bidang_id' => $request->bidang_id,
                    'status_id' => $request->status_id,
                    'validator_id' => $request->validator_id,
                    'hasil' => $request->hasil,
                    'kesan' => $request->kesan,
                    'catatan' => $request->catatan
                ];
                $pemeriskaan = Pemeriksaan::create($data);
                return new PostResource(true, "Pemeriksaan Berhasil Ditambahkan", $pemeriskaan);
            }
        } catch (\Throwable $th) {
            return new PostResource(false, "Pemeriksaan Gagal Ditambahkan", $th->getMessage());
        }
    }
    public function updatePemeriksaan(Request $request)
    {
        $data = [];
        if (isset($request->pasien_id)) {
            $data['pasien_id'] = $request->pasien_id;
        }
        if (isset($request->parameter_id)) {
            $data['parameter_id'] = $request->parameter_id;
        }
        if (isset($request->bidang_id)) {
            $data['bidang_id'] = $request->bidang_id;
        }
        if (isset($request->status_id)) {
            $data['status_id'] = $request->status_id;
        }
        if (isset($request->validator_id)) {
            $data['validator_id'] = $request->validator_id;
        }
        if (isset($request->hasil)) {
            $data['hasil'] = $request->hasil;
        }
        if (isset($request->kesan)) {
            $data['kesan'] = $request->kesan;
        }
        if (isset($request->catatan)) {
            $data['catatan'] = $request->catatan;
        }
        try {
            $pemeriksaan = Pemeriksaan::where('id', $request->id_pemeriksaan)->first();
            $pemeriksaan->update($data);
            return new PostResource(true, "Data Pemeriksaan Berhasil diperbarui", $pemeriksaan);
        } catch (\Throwable $th) {
            return new PostResource(false, "Data Pemeriksaan Gagal diperbarui", $th->getMessage());
        }
    }
    public function deletePemeriksaan(Request $request)
    {
        try {
            $pemeriksaan = Pemeriksaan::where('id', $request->id_pemeriksaan)->first();
            $pemeriksaan->delete();
            return new PostResource(true, "Data Pemeriksaan Berhasil dihapus", $pemeriksaan);
        } catch (\Throwable $th) {
            return new PostResource(false, "Data Pemeriksaan Gagal dihapus", $th->getMessage());
        }
    }
}
