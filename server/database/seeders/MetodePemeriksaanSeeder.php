<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MetodePemeriksaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            "-",
            "hematologi analyzer",
            "westergren",
            "slide",
            "mikroskop",
            "POCT",
            "kolorimetri GPO-PAP",
            "kolorimetri uricase",
            "tes dipstick",
            "benedict",
            "biuret",
            "strip",
            "imunokromatografi rapid test",
            "tes PCR",
            "tes aglutinasi slide",
            "imunokromatografi",
            "rapid test"
        ];
        foreach ($data as $data) {
            DB::table('metode_pemeriksaan')->insert(
                [
                    'nama' => $data,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                ]
            );
        }
    }
}
