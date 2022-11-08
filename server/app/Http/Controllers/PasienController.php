<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Models\Pasien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

class PasienController extends Controller
{
    public function getPasien($id = null)
    {
        try {
            if (isset($id)) {
                $pasien = Pasien::where('id', $id)->first();
                $pasien->tanggal_lahir = date('d-m-Y', strtotime(Carbon::createFromFormat('Y-m-d',$pasien->tanggal_lahir)));
            } else {
                $pasien = Pasien::all();
                foreach($pasien as $k => $p){
                    $pasien[$k]->tanggal_lahir = date('d-m-Y', strtotime(Carbon::createFromFormat('Y-m-d',$p->tanggal_lahir)));
                }
            }
            return new PostResource(true, "data Pasien Berhasil ditemukan", $pasien);
        } catch (\Throwable $th) {
            return new PostResource(false, "data pasien tidak ada");
        }
    }
    public function addPasien(Request $request)
    {
        try {
            if (isset($request->id_pasien)) {
                return $this->updatePasien($request);
            } else {
                $rules = [
                    'nama' => 'required|min:2',
                    'tanggal_lahir' => 'required|date',
                    'jenis_identitas' => 'in:KTP,PASSPORT,SIM|required',
                    'jenis_kelamin' => 'in:L,P|required',
                    'no_identitas' => 'required|unique:pasien',
                    'alamat' => 'required',
                    'no_telp' => 'required|max:13'
                ];
                $messages = [
                    'nama.required' => 'nama tidak boleh kosong',
                    'tanggal_lahir.required' => 'tanggal lahir tidak boleh kosong',
                    'nama.min' => 'nama terlalu pendek',
                    'jenis_identitas.in' => 'jenis identitas tidak ada',
                    'jenis_identitas.required' => 'jenis identitas diperlukan',
                    'jenis_kelamin.in' => 'jenis kelamin tidak ada',
                    'jenis_kelamin.required' => 'jenis kelamin diperlukan',
                    'no_identitas.required' => 'no identitas tidak boleh kosong',
                    'no_identitas.unique' => 'no identitas telah digunakan',
                    'alamat.required' => 'alamat tidak boleh kosong',
                    'no_telp.required' => 'no_telepon tidak boleh kosong'
                ];
                $validator = Validator::make($request->all(), $rules, $messages);
                if ($validator->fails()) {
                    return new PostResource(false, $validator->errors()->all());
                }
                $data = [
                    'nama' => $request->nama,
                    'tanggal_lahir' => date('Y-m-d', strtotime(Carbon::createFromFormat('d-m-Y',$request->tanggal_lahir))),
                    'jenis_identitas' => $request->jenis_identitas,
                    'jenis_kelamin' => $request->jenis_kelamin,
                    'no_identitas' => $request->no_identitas,
                    'bpjs' => $request->bpjs,
                    'alamat' => $request->alamat,
                    'no_telp' => $request->no_telp
                ];
                $pasien = Pasien::create($data);
                $pasien->tanggal_lahir = date('d-m-Y', strtotime(Carbon::createFromFormat('Y-m-d',$pasien->tanggal_lahir)));
                return new PostResource(true, "Pasien Berhasil Ditambahkan", $pasien);
            }
        } catch (\Throwable $th) {
            return new PostResource(false, "Pasien Gagal Ditambahkan",$th->getMessage());
        }
    }

    public function updatePasien(Request $request)
    {
        $data = [];
        if (isset($request->nama)) {
            $data['nama'] = $request->nama;
        }
        if (isset($request->tanggal_lahir)) {
            $data['tanggal_lahir'] = date('Y-m-d', strtotime(Carbon::createFromFormat('d-m-Y',$request->tanggal_lahir)));
        }
        if (isset($request->jenis_identitas)) {
            $data['jenis_identitas'] = $request->jenis_identitas;
        }
        if (isset($request->no_identitas)) {
            $data['no_identitas'] = $request->no_identitas;
        }
        if(isset($request->jenis_kelamin)){
            $data['jenis_kelamin'] = $request->jenis_kelamin;
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
            return new PostResource(false, "Data Pasien Gagal diperbarui");
        }
    }

    public function deletePasien(Request $request)
    {
        try {
            $pasien = Pasien::where('id', $request->id_pasien)->first();
            $pasien->delete();
            return new PostResource(true, "Data Pasien Berhasil dihapus", $pasien);
        } catch (\Throwable $th) {
            return new PostResource(false, "Data Pasien Gagal dihapus");
        }
    }
}
