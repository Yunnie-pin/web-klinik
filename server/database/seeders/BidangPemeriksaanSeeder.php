<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BidangPemeriksaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            "Hematodologi", "Bakteriologi dan Parasitologo", "Kimia Klinik", "Faeces", "Urinalisa", "Imunoserologi", "Lain-Lain", "Coba32"
        ];
        foreach ($data as $data) {
            DB::table('bidang_pemeriksaan')->insert([
                'bidang' => $data,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
    }
}
