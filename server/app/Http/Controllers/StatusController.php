<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StatusController extends Controller
{
    public function getStatus($id = null)
    {
        try {
            if (isset($id)) {
                $status = Status::where('id', $id)->first();
            } else {
                $status = Status::all();
            }
            return new PostResource(true, "data status ditemukan", $status);
        } catch (\Throwable $th) {
            return new PostResource(false, "data status tidak ada");
        }
    }
    public function addStatus(Request $request)
    {
        try {
            if (isset($request->id_status)) {
                return $this->updateStatus($request);
            } else {
                $rules = [
                    'name' => 'required'
                ];
                $validation = Validator::make($request->all(), $rules);
                if ($validation->fails()) {
                    return new PostResource(false, "status gagal ditambahkan", $validation->errors()->all());
                }
                $data = [
                    'name' => $request->name
                ];
                $status = Status::create($data);
            }
            return new PostResource(true, "status berhasil ditambahkan", $status);
        } catch (\Throwable $th) {
            return new PostResource(false, "status gagal ditambahkan");
        }
    }
    public function updateStatus(Request $request)
    {
        try {
            $data = [
                'name' => $request->name
            ];
            $status = Status::where('id', $request->id_status)->first();
            $status->update($data);
            return new PostResource(true, "status berhasil diubah", $status);
        } catch (\Throwable $th) {
            return new PostResource(false, "status gagal diubah");
        }
    }
    public function deleteStatus(Request $request)
    {
        try {
            $status = Status::where('id', $request->id_status)->first();
            $status->delete();
            return new PostResource(true, "Data status Pemeriksaan Berhasil dihapus", $status);
        } catch (\Throwable $th) {
            return new PostResource(false, "Data status Pemeriksaan Gagal dihapus");
        }
    }
}
