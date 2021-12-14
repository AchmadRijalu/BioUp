<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LevelSeeder extends Seeder
{
   /**
    * Run the database seeds.
    *
    * @return void
    */
   public function run()
   {
      DB::table('bio12_levels')->insert([
         'id' => '1',
         'character_id' => '1'
      ]);
      DB::table('bio12_levels')->insert([
         'id' => '2',
         'character_id' => '1'
      ]);
      DB::table('bio12_levels')->insert([
         'id' => '3',
         'character_id' => '1'
      ]);
      DB::table('bio12_levels')->insert([
         'id' => '4',
         'character_id' => '2'
      ]);
      DB::table('bio12_levels')->insert([
         'id' => '5',
         'character_id' => '2'
      ]);
      DB::table('bio12_levels')->insert([
         'id' => '6',
         'character_id' => '2'
      ]);
      DB::table('bio12_levels')->insert([
         'id' => '7',
         'character_id' => '3'
      ]);
      DB::table('bio12_levels')->insert([
         'id' => '8',
         'character_id' => '3'
      ]);
      DB::table('bio12_levels')->insert([
         'id' => '9',
         'character_id' => '3'
      ]);
      DB::table('bio12_levels')->insert([
         'id' => '10',
         'character_id' => '4'
      ]);
      DB::table('bio12_levels')->insert([
         'id' => '11',
         'character_id' => '4'
      ]);
      DB::table('bio12_levels')->insert([
         'id' => '12',
         'character_id' => '4'
      ]);
      DB::table('bio12_levels')->insert([
         'id' => '13',
         'character_id' => '5'
      ]);
      DB::table('bio12_levels')->insert([
         'id' => '14',
         'character_id' => '5'
      ]);
      DB::table('bio12_levels')->insert([
         'id' => '15',
         'character_id' => '5'
      ]);
      DB::table('bio12_levels')->insert([
         'id' => '16',
         'character_id' => '6'
      ]);
   }
}
