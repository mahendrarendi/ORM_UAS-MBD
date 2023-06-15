<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ShippersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('shippers')->insert([
            [
                'ShipperID' => 1,
                'CompanyName' => 'Shipper Company 1',
                'Phone' => '123-456-7890',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ShipperID' => 2,
                'CompanyName' => 'Shipper Company 2',
                'Phone' => '987-654-3210',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
