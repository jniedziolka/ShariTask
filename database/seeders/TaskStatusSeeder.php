<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dic_task_statuses')->insert([
            ['id' => 1, 'status' => 'Uncompleted'],
            ['id' => 2, 'status' => 'Completed'],
        ]);
    }
}
