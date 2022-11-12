<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KeteranganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'pemeriksaan_id' => 1,
                'bidang_id' => 1,
                'parameter_id' => 1,
                'hasil' => 'pantek',
                'kesan' => 'mbuh',
                'catatan' => 'elek'
            ],
            [
                'pemeriksaan_id' => 2,
                'bidang_id' => 1,
                'parameter_id' => 1,
                'hasil' => 'pantek',
                'kesan' => 'mbuh',
                'catatan' => 'elek'
            ],
            [
                'pemeriksaan_id' => 2,
                'bidang_id' => 1,
                'parameter_id' => 1,
                'hasil' => 'pantek',
                'kesan' => 'mbuh',
                'catatan' => 'elek'
            ]
        ];
        $date = Carbon::createFromFormat('Y-m-d H:i:s', '2022-10-18 00:00:00');
        foreach ($data as $i => $d) {
            $d['created_at'] = $date->format('Y-m-d H:i:s');
            $d['updated_at'] = $date->format('Y-m-d H:i:s');
            DB::table('keterangan_pemeriksaan')->insert($d);
        }
    }
}
