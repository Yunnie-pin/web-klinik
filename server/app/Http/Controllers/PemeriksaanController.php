<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Models\BidangPemeriksaan;
use App\Models\ParameterPemeriksaan;
use App\Models\Pasien;
use App\Models\Pemeriksaan;
use App\Models\Status;
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
                $pasien = Pasien::where('id', $periksa->pasien_id)->first();
                unset($periksa->pasien_id);
                $periksa->pasien = $pasien;

                $parameter = ParameterPemeriksaan::where('id', $periksa->parameter_id)->first();
                unset($periksa->parameter_id);
                $periksa->parameterPemeriksaan = $parameter;

                $bidang = BidangPemeriksaan::where('id', $periksa->bidang_id)->first();
                unset($periksa->bidang_id);
                $periksa->bidangPemeriksaan = $bidang;

                $status = Status::where('id', $periksa->status_id)->first();
                unset($periksa->status_id);
                $periksa->statusPemeriksaan = $status;
                
                $validator = ValidatorPemeriksaan::where('id', $periksa->validator_id)->first();
                unset($periksa->validator_id);
                $periksa->validatorPemeriksaan = $validator;
                $periksa->list = $this->convertStringToArrayObject($periksa->list);
            } else {
                $periksa = Pemeriksaan::all();
                foreach($periksa as $k => $p){
                    $periksa[$k]->list = $this->convertStringToArrayObject($p->list);
                }
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
                    'list' => 'required',
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
                if(!is_array($request->list)){
                    return new PostResource(false,"List not an Array");
                }
                $list = $this->convertArrayToString($request->list);
                $data = [
                    'pasien_id' => $request->pasien_id,
                    'parameter_pemeriksaan_id' => $request->parameter_id,
                    'bidang_pemeriksaan_id' => $request->bidang_id,
                    'status_id' => $request->status_id,
                    'validator_pemeriksaan_id' => $request->validator_id,
                    'list' => $list,
                    'hasil' => $request->hasil,
                    'kesan' => $request->kesan,
                    'catatan' => $request->catatan
                ];
                $pemeriksaan = Pemeriksaan::create($data);
                return new PostResource(true, "Pemeriksaan Berhasil Ditambahkan", $this->getPemeriksaan($pemeriksaan->id));
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
            $data['parameter_pemeriksaan_id'] = $request->parameter_id;
        }
        if (isset($request->bidang_id)) {
            $data['bidang_pemeriksaan_id'] = $request->bidang_id;
        }
        if (isset($request->status_id)) {
            $data['status_id'] = $request->status_id;
        }
        if (isset($request->validator_id)) {
            $data['validator_pemeriksaan_id'] = $request->validator_id;
        }
        if(isset($request->list)){
            $data['list'] = $this->convertArrayToString($request->list);
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
            return new PostResource(true, "Data Pemeriksaan Berhasil diperbarui", $this->getPemeriksaan($pemeriksaan->id));
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

    private function convertStringToArrayObject($list){    
        $list = explode('/',$list);
        foreach($list as $k => $l){
            $l = explode(',',$l);
            $list[$k] = new \stdClass();
            $list[$k]->parameter_id = $l[0];
            $list[$k]->bidang_id = $l[1];
        }
        return $list;
    }

    private function convertArrayToString($list){
        $temp = [];
        foreach($list as $l){
            array_push($temp,implode(',',$l));
        }
        return implode('/',$temp);
    }
}
