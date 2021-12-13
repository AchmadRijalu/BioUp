<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Prophecy\Call\Call;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            SoalSeeder::class,
            CharSeeder::class,
            LevelSeeder::class,
            UserCharSeeder::class,
        ]);
    }
}
