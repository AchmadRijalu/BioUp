<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LevelSoalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bio12_level_soals')->insert([
            'level_id' => '1',
            'soal_id' => '1'
        ]);
        DB::table('bio12_level_soals')->insert([
            'level_id' => '1',
            'soal_id' => '2'
        ]);
        DB::table('bio12_level_soals')->insert([
            'level_id' => '1',
            'soal_id' => '3'
        ]);
        DB::table('bio12_level_soals')->insert([
            'level_id' => '1',
            'soal_id' => '4'
        ]);

    }
}
