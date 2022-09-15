<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function getPasien($id = null)
    {
        try {

            if (isset($id)) {
                $pasien = Pasien::where('id', $id)->first();
                return new PostResource(true, "Pasien Berhasil Ditambahkan", $pasien);
            } else {
                return new PostResource(true, "Pasien Berhasil Ditambahkan", Pasien::all());
            }
        } catch (\Throwable $th) {
            return new PostResource(false, "Pasien Gagal Ditambahkan", $th->getMessage());
        }
    }
    public function addPasien(Request $request)
    {
        try {
            $rules = [
                'nama' => 'required|min:2',
                'tanggal_lahir' => 'required|date',
                'no_identitas' => 'required',
                // 'bpjs' => '',
                'alamat' => 'required',
                'no_telp' => 'required|max:13'
            ];
            if (isset($request->id_pasien)) {
                return $this->updatePasien($request);
            } else {
                $data = [
                    'nama' => $request->nama,
                    'tanggal_lahir' => date('Y-m-d', strtotime($request->tanggal_lahir)),
                    'no_identitas' => $request->no_identitas,
                    'bpjs' => $request->bpjs,
                    'alamat' => $request->alamat,
                    'no_telp' => $request->no_telp
                ];
                $pasien = Pasien::create($data);
                return new PostResource(true, "Pasien Berhasil Ditambahkan", $pasien);
            }
        } catch (\Throwable $th) {
            return new PostResource(false, "Pasien Gagal Ditambahkan", $th->getMessage());
        }
    }

    public function updatePasien(Request $request)
    {
        $data = [];
        if (isset($request->nama)) {
            $data['nama'] = $request->nama;
        }
        if (isset($request->tanggal_lahir)) {
            $data['tanggal_lahir'] = date('Y-m-d', strtotime($request->tanggal_lahir));
        }
        if (isset($request->no_identitas)) {
            $data['no_identitas'] = $request->no_identitas;
        }
        if (isset($request->bpjs)) {
            $data['bpjs'] = $request->bpjs;
        }
        if (isset($request->alamat)) {
            $data['alamat'] = $request->alamat;
        }
        if (isset($request->no_telp)) {
            $data['no_telp'] = $request->no_telp;
        }
        try {
            $pasien = Pasien::where('id', $request->id_pasien)->first();
            $pasien->update($data);
            return new PostResource(true, "Data Pasien Berhasil diperbarui", $pasien);
        } catch (\Throwable $th) {
            return new PostResource(false, "Data Pasien Gagal diperbarui", $th->getMessage());
        }
    }

    public function deletePasien(Request $request)
    {
        try {
            $pasien = Pasien::where('id', $request->id_pasien)->first();
            $pasien->delete();
            return new PostResource(true, "Data Pasien Berhasil dihapus", $pasien);
        } catch (\Throwable $th) {
            return new PostResource(false, "Data Pasien Gagal dihapus", $th->getMessage());
        }
    }
}
