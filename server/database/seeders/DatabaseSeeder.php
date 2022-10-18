<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use Mockery\Generator\Parameter;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RolesSeeder::class,
            UserSeeder::class,
            StatusSeeder::class,
            BidangPemeriksaanSeeder::class,
            PasienSeeder::class,
            MetodePemeriksaanSeeder::class,
            ParameterPemeriksaanSeeder::class,
            ValidatorPemeriksaanSeeder::class,
            PemeriksaanSeeder::class,
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
