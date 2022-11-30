<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

class PasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        $jenis_identitas = ['KTP', 'SIM', 'PASSPORT'];
        $this->command->info("Seeding Pasien");
        $this->command->getOutput()->progressStart(30);
        for ($i = 0; $i < 30; $i++) {
            DB::table('pasien')->insert([
                'nama' => $faker->name(),
                'tanggal_lahir' => $faker->date(),
                'jenis_identitas' => $jenis_identitas[rand(0, 2)],
                'no_identitas' => $faker->unique()->nik(),
                'bpjs' => $faker->unique()->nik(),
                'alamat' => $faker->address(),
                'no_telp' => $faker->unixTime(),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
            $this->command->getOutput()->progressAdvance();
        }
        $this->command->getOutput()->progressFinish();
    }
}
