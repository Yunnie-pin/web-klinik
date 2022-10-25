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
                'parameter' => 'Darah Rutin',
                'nilai_rujukan' => ' ',
                'metode_id' => 2,
                'satuan' => ' ',
                'harga' => '10000',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'bidang_id' => 1,
                'parameter' => 'Hemoglobin',
                'nilai_rujukan' => 'p : 12-16 g/dL, l : 14-18 g/dL',
                'metode_id' => 2,
                'satuan' => 'g/dl',
                'harga' => '10000',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'bidang_id' => 1,
                'parameter' => 'Hitung Erytrosit',
                'nilai_rujukan' => '3,5-5,5 jt/mm3',
                'metode_id' => 2,
                'satuan' => 'jt/mm3',
                'harga' => '10000',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'bidang_id' => 1,
                'parameter' => 'Hitung Lekosit',
                'nilai_rujukan' => '4-11 rb/mm3',
                'metode_id' => 2,
                'satuan' => 'rb/mm3',
                'harga' => '10000',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'bidang_id' => 1,
                'parameter' => 'Hitung Trombosit',
                'nilai_rujukan' => '150-450 rb/mm3',
                'metode_id' => 2,
                'satuan' => 'rb/mm3',
                'harga' => '10000',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ];
        foreach ($data as $data) {
            DB::table('parameter_pemeriksaan')->insert($data);
        }
    }
}
