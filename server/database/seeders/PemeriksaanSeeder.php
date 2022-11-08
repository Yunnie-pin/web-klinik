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
                'pasien_id' => 1,
                'bidang_pemeriksaan_id' =>  1,
                'parameter_pemeriksaan_id' => 1,
                'status_id' => 1,
                'validator_pemeriksaan_id' => 1,
                'list' => '1,1/1,2',
                'hasil' => '-',
                'kesan' => '-',
                'catatan' => '-',
            ],
            [ // 2
                'pasien_id' => 2,
                'bidang_pemeriksaan_id' =>  1,
                'parameter_pemeriksaan_id' => 3,
                'status_id' => 1,
                'validator_pemeriksaan_id' => 3,
                'list' => '1,1/1,2',
                'hasil' => '-',
                'kesan' => '-',
                'catatan' => '-',
            ],
            [ // 3
                'pasien_id' => 1,
                'bidang_pemeriksaan_id' =>  1,
                'parameter_pemeriksaan_id' => 3,
                'status_id' => 1,
                'validator_pemeriksaan_id' => 1,
                'list' => '1,1/1,2',
                'hasil' => '-',
                'kesan' => '-',
                'catatan' => '-',
            ],
            [ // 4
                'pasien_id' => 1,
                'bidang_pemeriksaan_id' =>  1,
                'parameter_pemeriksaan_id' => 3,
                'status_id' => 1,
                'validator_pemeriksaan_id' => 1,
                'list' => '1,1/1,2',
                'hasil' => '-',
                'kesan' => '-',
                'catatan' => '-',
            ],
            [ // 5
                'pasien_id' => 2,
                'bidang_pemeriksaan_id' =>  1,
                'parameter_pemeriksaan_id' => 5,
                'status_id' => 1,
                'validator_pemeriksaan_id' => 3,
                'list' => '1,1/1,2',
                'hasil' => '-',
                'kesan' => '-',
                'catatan' => '-',
            ],
            [ // 6
                'pasien_id' => 1,
                'bidang_pemeriksaan_id' =>  3,
                'parameter_pemeriksaan_id' => 1,
                'status_id' => 1,
                'validator_pemeriksaan_id' => 1,
                'list' => '1,1/1,2',
                'hasil' => '-',
                'kesan' => '-',
                'catatan' => '-',
            ],
            [ // 7
                'pasien_id' => 1,
                'bidang_pemeriksaan_id' =>  3,
                'parameter_pemeriksaan_id' => 3,
                'status_id' => 1,
                'validator_pemeriksaan_id' => 2,
                'list' => '1,1/1,2',
                'hasil' => '-',
                'kesan' => '-',
                'catatan' => '-',
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
