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
         'charID' => '1'
      ]);
      DB::table('bio12_levels')->insert([
         'id' => '2',
         'charID' => '1'
      ]);
      DB::table('bio12_levels')->insert([
         'id' => '3',
         'charID' => '1'
      ]);
      DB::table('bio12_levels')->insert([
         'id' => '4',
         'charID' => '2'
      ]);
      DB::table('bio12_levels')->insert([
         'id' => '5',
         'charID' => '2'
      ]);
      DB::table('bio12_levels')->insert([
         'id' => '6',
         'charID' => '2'
      ]);
      DB::table('bio12_levels')->insert([
         'id' => '7',
         'charID' => '3'
      ]);
      DB::table('bio12_levels')->insert([
         'id' => '8',
         'charID' => '3'
      ]);
      DB::table('bio12_levels')->insert([
         'id' => '9',
         'charID' => '3'
      ]);
      DB::table('bio12_levels')->insert([
         'id' => '10',
         'charID' => '4'
      ]);
      DB::table('bio12_levels')->insert([
         'id' => '11',
         'charID' => '4'
      ]);
      DB::table('bio12_levels')->insert([
         'id' => '12',
         'charID' => '4'
      ]);
      DB::table('bio12_levels')->insert([
         'id' => '13',
         'charID' => '5'
      ]);
      DB::table('bio12_levels')->insert([
         'id' => '14',
         'charID' => '5'
      ]);
      DB::table('bio12_levels')->insert([
         'id' => '15',
         'charID' => '5'
      ]);
      DB::table('bio12_levels')->insert([
         'id' => '16',
         'charID' => '6'
      ]);
   }
}
