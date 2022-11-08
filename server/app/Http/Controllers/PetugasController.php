<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Models\Roles;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PetugasController extends Controller
{
    public function getPetugas($username = null)
    {
        try {
            if (isset($username)) {
                $petugas = User::where('username', $username)->first();
                $roles_id = $petugas->roles_id;
                unset($petugas->roles_id);
                $petugas->roles = Roles::where('id', $roles_id)->first();
            } else {
                $petugas = User::all();
                foreach ($petugas as $data) {
                    $roles_id = $data->roles_id;
                    unset($data->roles_id);
                    $data->roles = Roles::where('id', $roles_id)->first();
                }
            }
            return new PostResource(true, "data petugas ditemukan", $petugas);
        } catch (\Throwable $th) {
            return new PostResource(false, "data petugas tidak ada");
        }
    }
    public function addPetugas(Request $request)
    {
        return app('App\Http\Controllers\UserController')->register($request);
    }
    public function updatePetugas(Request $request)
    {
        $petugas = User::where('username', $request->username)->first();
        if ($petugas == null) {
            return new PostResource(false, "Petugas Tidak ditemukan");
        }
        $data = [];
        if (isset($request->email)) {
            $data['email'] = $request->email;
        }
        if (isset($request->nama_lengkap)) {
            $data['nama_lengkap'] = $request->nama_lengkap;
        }
        if (isset($request->no_telp)) {
            $data['no_telp'] = $request->no_telp;
        }
        if (isset($request->roles_id)) {
            $data['roles_id'] = $request->roles_id;
        }
        try {
            $petugas->update($data);
            return new PostResource(true, "Data Petugas Berhasil diperbarui", $petugas);
        } catch (\Throwable $th) {
            return new PostResource(false, "Data Petugas Gagal diperbarui");
        }
    }
    public function deletePetugas(Request $request)
    {
        try {
            $petugas = User::where('username', $request->username)->first();
            $petugas->delete();
            return new PostResource(true, "Data Petugas Berhasil dihapus", $petugas);
        } catch (\Throwable $th) {
            return new PostResource(false, "Data Petugas Gagal dihapus");
        }
    }
}
