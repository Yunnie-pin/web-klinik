<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pasien')->insert([
            'nama' => 'curut 1',
            'tanggal_lahir' => date('Y-m-d', strtotime('01/02/1999')),
            'jenis_identitas' => 'KTP',
            'no_identitas' => '012344567889123',
            'bpjs' => "0123921904",
            'alamat' => "Curutisme, jawa",
            'no_telp' => "091230948301",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('pasien')->insert([
            'nama' => 'curut 2',
            'tanggal_lahir' => date('Y-m-d', strtotime('01/02/1999')),
            'jenis_identitas' => 'KTP',
            'no_identitas' => '012344567889124',
            'bpjs' => "0123921905",
            'alamat' => "Curutisme, jawa",
            'no_telp' => "091230948301",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
