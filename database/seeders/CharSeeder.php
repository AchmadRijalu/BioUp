<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CharSeeder extends Seeder
{
   /**
    * Run the database seeds.
    *
    * @return void
    */
   public function run()
   {
      //
      DB::table('bio12_characters')->insert([
         'healthPoint' => '3',
         'nama' => 'touki',
         'charimgpath' => '/image/Touki.svg',
         'reqscore' => '0',
         'charimgpath_png' => '/image/Touki.png'
      ]);
      DB::table('bio12_characters')->insert([
         'healthPoint' => '4',
         'nama' => 'Blaud',
         'charimgpath' => '/image/Blaud.svg',
         'reqscore' => '250',
         'charimgpath_png' => '/image/Blaud.png'
      ]);
      DB::table('bio12_characters')->insert([
         'healthPoint' => '5',
         'nama' => 'Xen',
         'charimgpath' => '/image/Xen.svg',
         'reqscore' => '570',
         'charimgpath_png' => '/image/xen.png'
      ]);
      DB::table('bio12_characters')->insert([
         'healthPoint' => '6',
         'nama' => 'lucy',
         'charimgpath' => '/image/lucy.svg',
         'reqscore' => '880',
         'charimgpath_png' => '/image/Lucy.png'
      ]);
      DB::table('bio12_characters')->insert([
         'healthPoint' => '6',
         'nama' => 'biotron',
         'charimgpath' => '/image/biotron.svg',
         'reqscore' => '1190',
         'charimgpath_png' => '/image/Biotron.png'
      ]);
      DB::table('bio12_characters')->insert([
         'healthPoint' => '8',
         'nama' => 'lass',
         'charimgpath' => '/image/last.svg',
         'reqscore' => '1400',
         'charimgpath_png' => '/image/Lass.png'
      ]);
   }
}
