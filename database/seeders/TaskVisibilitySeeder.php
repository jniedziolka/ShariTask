<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskVisibilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dic_task_visibilities')->insert([
            ['id' => 1, 'visibility' => 'Private'],
            ['id' => 2, 'visibility' => 'Public'],
        ]);
    }
}
