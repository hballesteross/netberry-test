<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('task_category')->insert(['task_id' => '1', 'category_id' => '2']);
        DB::table('task_category')->insert(['task_id' => '2', 'category_id' => '2']);
        DB::table('task_category')->insert(['task_id' => '2', 'category_id' => '1']);
    }
}
