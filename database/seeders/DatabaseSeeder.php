<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
           TaskStatusSeeder::class,
           TaskVisibilitySeeder::class
        ]);

        DB::table('users')->insert([
            'first_name' => 'Testing',
            'last_name' => 'Tester',
            'nickname' => 'test',
            'email' => 'test@test.com',
            'password' => Hash::make('12345678')
        ]);
    }
}
