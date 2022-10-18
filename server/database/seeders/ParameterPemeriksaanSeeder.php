<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ParameterPemeriksaanSeeder extends Seeder
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
                'bidang_id' => 1,
                'parameter' => 'test 1',
                'nilai_rujukan' => 'mbuh',
                'metode_id' => 1,
                'satuan' => 'g/dl',
                'harga' => '10000',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'bidang_id' => 2,
                'parameter' => 'test 2',
                'nilai_rujukan' => 'mbuh 2',
                'metode_id' => 2,
                'satuan' => 'g/dl 2',
                'harga' => '100002',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'bidang_id' => 3,
                'parameter' => 'test 3',
                'nilai_rujukan' => 'mbuh 3',
                'metode_id' => 3,
                'satuan' => 'g/dl 3',
                'harga' => '100003',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'bidang_id' => 4,
                'parameter' => 'test 4',
                'nilai_rujukan' => 'mbuh 4',
                'metode_id' => 4,
                'satuan' => 'g/dl 4',
                'harga' => '100004',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'bidang_id' => 5,
                'parameter' => 'test 5',
                'nilai_rujukan' => 'mbuh 5',
                'metode_id' => 5,
                'satuan' => 'g/dl 5',
                'harga' => '100005',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ];
        foreach ($data as $data) {
            DB::table('parameter_pemeriksaan')->insert($data);
        }
    }
}
