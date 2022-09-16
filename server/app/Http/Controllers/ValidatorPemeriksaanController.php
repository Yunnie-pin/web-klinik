<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Models\ValidatorPemeriksaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ValidatorPemeriksaanController extends Controller
{

    public function getValidatorPemeriksaan($id = null)
    {
        try {
            if (isset($id)) {
                $validatorPemeriksaan = ValidatorPemeriksaan::where('id', $id)->first();
            } else {
                $validatorPemeriksaan = ValidatorPemeriksaan::all();
            }
            return new PostResource(true, "data petugas ditemukan", $validatorPemeriksaan);
        } catch (\Throwable $th) {
            return new PostResource(false, "data petugas tidak ada", $th->getMessage());
        }
    }
    public function addValidatorPemeriksaan(Request $request)
    {
        try {
            if (isset($request->id_validator)) {
                return $this->updateValidatorPemeriksaan($request);
            } else {
                $rules = [
                    'nama' => 'required',
                ];
                $validation = Validator::make($request->all(), $rules);
                if ($validation->fails()) {
                    return new PostResource(false, "petugas gagal ditambahkan", $validation->errors()->all());
                }
                $data = [
                    'nama' => $request->nama,
                    'status' => $request->status ? 1 : 0
                ];
                $validatorPemeriksaan = ValidatorPemeriksaan::create($data);
            }
            return new PostResource(true, "petugas berhasil ditambahkan", $validatorPemeriksaan);
        } catch (\Throwable $th) {
            return new PostResource(false, "petugas gagal ditambahkan", $th->getMessage());
        }
    }
    public function updateValidatorPemeriksaan(Request $request)
    {
        try {
            $data = [
                'nama' => $request->nama,
                'status' => $request->status ? 1 : 0
            ];
            $validatorPemeriksaan = ValidatorPemeriksaan::where('id', $request->id_validator)->first();
            $validatorPemeriksaan->update($data);
            return new PostResource(true, "petugas berhasil diubah", $validatorPemeriksaan);
        } catch (\Throwable $th) {
            return new PostResource(false, "petugas gagal diubah", $th->getMessage());
        }
    }
    public function deleteValidatorPemeriksaan(Request $request)
    {
        try {
            $validatorPemeriksaan = ValidatorPemeriksaan::where('id', $request->id_validator)->first();
            $validatorPemeriksaan->delete();
            return new PostResource(true, "Data Petugas Pemeriksaan Berhasil dihapus", $validatorPemeriksaan);
        } catch (\Throwable $th) {
            return new PostResource(false, "Data Petugas Pemeriksaan Gagal dihapus", $th->getMessage());
        }
    }
}
