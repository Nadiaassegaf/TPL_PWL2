<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Pastikan ini di-import

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create('id_ID');

    for ($i = 0; $i < 10; $i++) {
        DB::table('dosen')->insert([
            'nidn' => $faker->unique()->numerify('##########'),
            'nama' => $faker->name(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
    }
}