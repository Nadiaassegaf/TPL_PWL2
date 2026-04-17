<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KrsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $faker = \Faker\Factory::create('id_ID');

    $mahasiswa = DB::table('mahasiswa')->pluck('npm');
    $matkul = DB::table('matakuliah')->pluck('kode_matakuliah');

    for ($i = 0; $i < 10; $i++) {
        DB::table('krs')->insert([
            'npm' => $faker->randomElement($mahasiswa),
            'kode_matakuliah' => $faker->randomElement($matkul),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
    }
}
