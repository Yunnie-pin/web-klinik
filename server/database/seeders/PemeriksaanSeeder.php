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
        $date = Carbon::createFromFormat('Y-m-d H:i:s', '2022-10-18 00:00:00');
        $this->command->info("Seeding Pemeriksaan");
        $this->command->getOutput()->progressStart(20);
        for ($i = 0; $i < 20; $i++) {
            DB::table('pemeriksaan')->insert([
                'user_id' => 1,
                'pasien_id' => rand(1, 30),
                'status_id' => rand(1, 4),
                'validator_pemeriksaan_id' => rand(1, 10),
                'created_at' => $date->format('Y-m-d H:i:s'),
                'updated_at' => $date->format('Y-m-d H:i:s'),
            ]);
            $this->command->getOutput()->progressAdvance();
        }
        $this->command->getOutput()->progressFinish();
    }
}
