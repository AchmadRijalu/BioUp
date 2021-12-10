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
         'levelID' => '1',
         'charID' => '1'
      ]);
      DB::table('bio12_levels')->insert([
         'levelID' => '2',
         'charID' => '1'
      ]);
      DB::table('bio12_levels')->insert([
         'levelID' => '3',
         'charID' => '1'
      ]);
      DB::table('bio12_levels')->insert([
         'levelID' => '4',
         'charID' => '2'
      ]);
      DB::table('bio12_levels')->insert([
         'levelID' => '5',
         'charID' => '2'
      ]);
      DB::table('bio12_levels')->insert([
         'levelID' => '6',
         'charID' => '2'
      ]);
      DB::table('bio12_levels')->insert([
         'levelID' => '7',
         'charID' => '3'
      ]);
      DB::table('bio12_levels')->insert([
         'levelID' => '8',
         'charID' => '3'
      ]);
      DB::table('bio12_levels')->insert([
         'levelID' => '9',
         'charID' => '3'
      ]);
      DB::table('bio12_levels')->insert([
         'levelID' => '10',
         'charID' => '4'
      ]);
      DB::table('bio12_levels')->insert([
         'levelID' => '11',
         'charID' => '4'
      ]);
      DB::table('bio12_levels')->insert([
         'levelID' => '12',
         'charID' => '4'
      ]);
      DB::table('bio12_levels')->insert([
         'levelID' => '13',
         'charID' => '5'
      ]);
      DB::table('bio12_levels')->insert([
         'levelID' => '14',
         'charID' => '5'
      ]);
      DB::table('bio12_levels')->insert([
         'levelID' => '15',
         'charID' => '5'
      ]);
      DB::table('bio12_levels')->insert([
         'levelID' => '16',
         'charID' => '6'
      ]);
   }
}
