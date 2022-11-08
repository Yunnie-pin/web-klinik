<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Models\Roles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RolesController extends Controller
{

    public function getRoles($id = null)
    {
        try {
            if (isset($id)) {
                $roles = Roles::where('id', $id)->first();
            } else {
                $roles = Roles::all();
            }
            return new PostResource(true, "data roles ditemukan", $roles);
        } catch (\Throwable $th) {
            return new PostResource(false, "data roles tidak ada");
        }
    }
    public function addRoles(Request $request)
    {
        try {
            if (isset($request->id_roles)) {
                return $this->updateRoles($request);
            } else {
                $rules = [
                    'name' => 'required'
                ];
                $validation = Validator::make($request->all(), $rules);
                if ($validation->fails()) {
                    return new PostResource(false, "roles gagal ditambahkan", $validation->errors()->all());
                }
                $data = [
                    'name' => $request->name
                ];
                $roles = Roles::create($data);
            }
            return new PostResource(true, "roles berhasil ditambahkan", $roles);
        } catch (\Throwable $th) {
            return new PostResource(false, "roles gagal ditambahkan");
        }
    }
    public function updateRoles(Request $request)
    {
        try {
            $data = [
                'name' => $request->name
            ];
            $roles = Roles::where('id', $request->id_roles)->first();
            $roles->update($data);
            return new PostResource(true, "roles berhasil diubah", $roles);
        } catch (\Throwable $th) {
            return new PostResource(false, "roles gagal diubah");
        }
    }
    public function deleteRoles(Request $request)
    {
        try {
            $roles = Roles::where('id', $request->id_roles)->first();
            $roles->delete();
            return new PostResource(true, "Data roles Pemeriksaan Berhasil dihapus", $roles);
        } catch (\Throwable $th) {
            return new PostResource(false, "Data roles Pemeriksaan Gagal dihapus");
        }
    }
}
