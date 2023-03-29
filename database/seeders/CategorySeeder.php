<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert(['description' => 'JavaScript', 'color' => 'warning']);
        DB::table('categories')->insert(['description' => 'PHP', 'color' => 'primary']);
        DB::table('categories')->insert(['description' => 'CSS' , 'color' => 'success']);

        
    }
}
