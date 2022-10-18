<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Models\Pasien;
use App\Models\Pemeriksaan;
use App\Models\Roles;
use App\Models\User;

class InfoController extends Controller
{
    public function getDashboardInfo()
    {
        try {
            $data = new \stdClass();
            // Pasien
            $data->pasien = Pasien::all()->count();
            // Pemeriksaan
            $pemeriksaan = new \stdClass();
            $periksa = Pemeriksaan::all();
            $pemeriksaan->harian = 0;
            $pemeriksaan->bulanan = 0;
            $pemeriksaan->tahunan = 0;
            foreach ($periksa as $d) {
                if (($d->created_at)->isToday()) {
                    $pemeriksaan->harian++;
                }
                if (($d->created_at)->isCurrentMonth()) {
                    $pemeriksaan->bulanan++;
                }
                if (($d->created_at)->isCurrentYear()) {
                    $pemeriksaan->tahunan++;
                }
            }
            $data->pemeriksaan = $pemeriksaan;
            // User
            $roles = Roles::all();
            $user = new \stdClass();
            foreach ($roles as $r) {
                $user->{$r->name} = User::where('roles_id', $r->id)->count();
            }
            $data->user = $user;
            return new PostResource(false,"data ditemukan",$data);
        } catch (\Throwable $th) {
            return new PostResource(false,"data tidak ditemukan");
        }
    }
}
