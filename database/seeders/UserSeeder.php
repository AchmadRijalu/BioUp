<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'username' => 'Achmad Rijalu',
            'email' => 'jalu@gmail.com',
            'password' => Hash::make('12345678'),
            'name' => 'rijalu',
            'school' => 'uc',
            'city' => 'Surabaya',
            'birthyear' => 2002,
            'created_at' => \Carbon\Carbon::now(),
            'email_verified_at' => \Carbon\Carbon::now()
        ]);
        // DB::table('users')->insert([
        //     'username' => 'User',
        //     'email' => 'user@gmail.com',
        //     'password' => Hash::make('user123'),
        //     'role' => 'user',
        //     'created_at' => \Carbon\Carbon::now(),
        //     'email_verified_at' => \Carbon\Carbon::now()
        // ]);
    }
}
