<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'CategoryID' => 1,
                'CategoryName' => 'Category 1',
                'Description' => 'Description for Category 1',
                'Picture' => 'picture1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'CategoryID' => 2,
                'CategoryName' => 'Category 2',
                'Description' => 'Description for Category 2',
                'Picture' => 'picture2.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'CategoryID' => 3,
                'CategoryName' => 'Category 3',
                'Description' => 'Description for Category 3',
                'Picture' => 'picture3.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
