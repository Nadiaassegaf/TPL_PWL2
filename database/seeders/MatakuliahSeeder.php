<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // WAJIB DITAMBAHKAN

class MatakuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $faker = \Faker\Factory::create('id_ID');

    for ($i = 0; $i < 10; $i++) {
        DB::table('matakuliah')->insert([
            'kode_matakuliah' => $faker->unique()->bothify('MK###'),
            'nama_matakuliah' => $faker->word(),
            'sks' => $faker->numberBetween(2, 4),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
    }
}