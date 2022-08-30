<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = ['Super Admin', 'Administrasi', 'Laborat', 'Poli'];
        foreach ($data as $data) {
            DB::table('roles')->insert([
                'name' => $data,
            ]);
        }
    }
}