<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PemeriksaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [ // 1
                'user_id' => 1,
                'pasien_id' => 1,
                'status_id' => 1,
                'validator_pemeriksaan_id' => 1,
            ],
            [ // 2
                'user_id' => 2,
                'pasien_id' => 1,
                'status_id' => 1,
                'validator_pemeriksaan_id' => 1,
            ],
            [ // 3
                'user_id' => 2,
                'pasien_id' => 1,
                'status_id' => 2,
                'validator_pemeriksaan_id' => 1,
            ],
            [ // 4
                'user_id' => 1,
                'pasien_id' => 1,
                'status_id' => 2,
                'validator_pemeriksaan_id' => 1,
            ],
            [ // 5
                'user_id' => 1,
                'pasien_id' => 1,
                'status_id' => 1,
                'validator_pemeriksaan_id' => 1,
            ],
            [ // 6
                'user_id' => 2,
                'pasien_id' => 1,
                'status_id' => 2,
                'validator_pemeriksaan_id' => 1,
            ],
            [ // 7
                'user_id' => 1,
                'pasien_id' => 1,
                'status_id' => 1,
                'validator_pemeriksaan_id' => 1,
            ],
        ];
        $date = Carbon::createFromFormat('Y-m-d H:i:s', '2022-10-18 00:00:00');
        foreach ($data as $i => $d) {
            $d['created_at'] = $date->format('Y-m-d H:i:s');
            $d['updated_at'] = $date->format('Y-m-d H:i:s');
            DB::table('pemeriksaan')->insert($d);
        }
        foreach ($data as $i => $d) {
            $date = Carbon::createFromFormat('Y-m-d H:i:s', '2022-10-' . ($i + 1) . ' 00:00:00');
            $d['created_at'] = $date->format('Y-m-d H:i:s');
            $d['updated_at'] = $date->format('Y-m-d H:i:s');
            DB::table('pemeriksaan')->insert($d);
        }
        $date = Carbon::createFromFormat('Y-m-d H:i:s', '2022-11-18 00:00:00');
        foreach ($data as $i => $d) {
            $d['created_at'] = $date->format('Y-m-d H:i:s');
            $d['updated_at'] = $date->format('Y-m-d H:i:s');
            DB::table('pemeriksaan')->insert($d);
        }
    }
}
