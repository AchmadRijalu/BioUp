<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserCharSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bio12_user_characters')->insert([
            'user_id' => '1',
            'character_id' => '1',
            'score' => '0',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        DB::table('bio12_user_characters')->insert([
            'user_id' => '1',
            'character_id' => '2',
            'score' => '0',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        DB::table('bio12_user_characters')->insert([
            'user_id' => '1',
            'character_id' => '3',
            'score' => '0',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
    }
}
