<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JadwalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $faker = \Faker\Factory::create('id_ID');

    $dosen = DB::table('dosen')->pluck('nidn');
    $matkul = DB::table('matakuliah')->pluck('kode_matakuliah');

    for ($i = 0; $i < 10; $i++) {
        DB::table('jadwal')->insert([
            'kode_matakuliah' => $faker->randomElement($matkul),
            'nidn' => $faker->randomElement($dosen),
            'kelas' => $faker->randomElement(['A','B','C']),
            'hari' => $faker->randomElement(['Senin','Selasa','Rabu','Kamis','Jumat']),
            'jam' => $faker->time('H:i:s'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
    }
}
