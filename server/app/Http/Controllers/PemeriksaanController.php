<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Models\Keterangan;
use App\Models\Pasien;
use App\Models\Pemeriksaan;
use App\Models\Status;
use App\Models\ValidatorPemeriksaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PemeriksaanController extends Controller
{
    public function getPemeriksaan($id = null)
    {
        try {
            if (isset($id)) {
                $periksa = Pemeriksaan::where('id', $id)->first();
                $this->detailed($periksa);
            } else {
                $periksa = Pemeriksaan::all();
                foreach ($periksa as $p) {
                    $this->detailed($p);
                }
            }
            return new PostResource(true, "data pemeriksaan ditemukan", $periksa);
        } catch (\Throwable $th) {
            return new PostResource(false, "data pemeriksaan tidak ada");
        }
    }

    public function addPemeriksaan(Request $request)
    {
        if (!Auth::check()) {
            return new PostResource(false, "unauthenticated");
        }
        try {
            if (isset($request->id_pemeriksaan)) {
                return $this->updatePemeriksaan($request);
            }
            $rules = [
                'pasien_id'     => 'required',
                'status_id'     => 'required',
                'keterangan'    => 'required'
            ];
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                return new PostResource(false, $validator->errors()->all());
            }
            $pasien = Pasien::where('id', $request->pasien_id)->first();
            if (!$pasien) {
                return new PostResource(false, "Pasien tidak ditemukan");
            }
            $status = Status::where('id', $request->status_id)->first();
            if (!$status) {
                return new PostResource(false, "Status tidak ditemukan");
            }
            $validator = ValidatorPemeriksaan::where('id', $request->validator_id)->first();
            if (!$validator) {
                return new PostResource(false, "Validator Pemeriksaan tidak ditemukan");
            }
            if (!is_array($request->keterangan) && $request->keterangan != null) {
                return new PostResource(false, "Keterangan not in a List");
            }
            $data = [
                'user_id' => $request->user()->id,
                'pasien_id' => $request->pasien_id,
                'status_id' => $request->status_id,
                'validator_pemeriksaan_id' => $request->validator_id,
            ];
            $pemeriksaan = Pemeriksaan::create($data);
            if ($request->keterangan) {
                try {
                    foreach ($request->keterangan as $keterangan) {
                        $keterangan['pemeriksaan_id'] = $pemeriksaan->id;
                        Keterangan::create($keterangan);
                    }
                } catch (\Throwable $th) {
                    $pemeriksaan->delete();
                    return new PostResource(false, "Cek Kembali List Keterangan Pemeriksaan");
                }
            }
            return $this->getPemeriksaan($pemeriksaan->id);
        } catch (\Throwable $th) {
            return new PostResource(false, "Pemeriksaan Gagal Ditambahkan");
        }
    }

    public function updatePemeriksaan(Request $request)
    {
        $rules = [
            'id_pemeriksaan'     => 'required',
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return new PostResource(false, $validator->errors()->all());
        }
        $data = [];
        if (isset($request->pasien_id)) {
            $data['pasien_id'] = $request->pasien_id;
        }
        if (isset($request->status_id)) {
            $data['status_id'] = $request->status_id;
        }
        if (isset($request->validator_id)) {
            $data['validator_pemeriksaan_id'] = $request->validator_id;
        }
        try {
            $pemeriksaan = Pemeriksaan::where('id', $request->id_pemeriksaan)->first();
            if (isset($request->keterangan)) {
                foreach ($request->keterangan as $ket) {
                    if (isset($ket['id'])) {
                        Keterangan::where('id', $ket['id'])->update($ket);
                    } else if (isset($ket['_id'])) {
                        Keterangan::where('id', $ket['_id'])->delete();
                    } else {
                        $ket['pemeriksaan_id'] = $request->id_pemeriksaan;
                        Keterangan::create($ket);
                    }
                }
            }
            $pemeriksaan->update($data);
            return new PostResource(true, "Data Pemeriksaan Berhasil diperbarui", $this->getPemeriksaan($pemeriksaan->id));
        } catch (\Throwable $th) {
            return new PostResource(false, "Data Pemeriksaan Gagal diperbarui");
        }
    }

    public function deletePemeriksaan(Request $request)
    {
        try {
            $pemeriksaan = Pemeriksaan::where('id', $request->id_pemeriksaan)->first();
            $this->detailed($pemeriksaan);
            Keterangan::where('pemeriksaan_id', $request->id_pemeriksaan)->delete();
            Pemeriksaan::where('id', $request->id_pemeriksaan)->delete();
            return new PostResource(true, "Data Pemeriksaan Berhasil dihapus", $pemeriksaan);
        } catch (\Throwable $th) {
            return new PostResource(false, "Data Pemeriksaan Gagal dihapus");
        }
    }

    private function detailed($periksa)
    {
        $data = Pemeriksaan::findOrFail($periksa->id);
        $periksa->user = $data->user()->first();
        $periksa->pasien = $data->pasien()->first();
        $periksa->status = $data->status()->first();
        $periksa->validator = $data->validator()->first();
        $periksa->keterangan = $this->getKeterangan($periksa->id);
    }

    private function getKeterangan($id)
    {
        $keterangan = Keterangan::where('pemeriksaan_id', $id)->get();
        foreach ($keterangan as $ket) {
            $data = Keterangan::findOrFail($ket->id);
            $ket->bidang = $data->bidang()->get();
            $ket->parameter = $data->parameter()->get();
            $ket->metode = $data->metode()->get();
        }
        return $keterangan;
    }

    private function convertStringToArrayObject($list)
    {
        $list = explode('/', $list);
        foreach ($list as $k => $l) {
            $l = explode(',', $l);
            $list[$k] = new \stdClass();
            $list[$k]->parameter_id = $l[0];
            $list[$k]->bidang_id = $l[1];
        }
        return $list;
    }

    private function convertArrayToString($list)
    {
        $temp = [];
        foreach ($list as $l) {
            array_push($temp, implode(',', $l));
        }
        return implode('/', $temp);
    }
}
