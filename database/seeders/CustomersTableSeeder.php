<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('customers')->insert([
            [
                'CustomerID' => 1,
                'CompanyName' => 'Customer Company 1',
                'ContactName' => 'Rendi Nicolas Mahendra',
                'ContactTitle' => 'CEO',
                'Address' => '543 Main St',
                'City' => 'City 1',
                'Region' => 'Region 1',
                'PostalCode' => '12345',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'CustomerID' => 2,
                'CompanyName' => 'Customer Company 2',
                'ContactName' => 'Rendi Mahendra',
                'ContactTitle' => 'CEO',
                'Address' => '123 Main St',
                'City' => 'City 2',
                'Region' => 'Region 2',
                'PostalCode' => '54321',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'CustomerID' => 3,
                'CompanyName' => 'Customer Company 3',
                'ContactName' => 'Mahendra Rendi',
                'ContactTitle' => 'CEO',
                'Address' => '321 Main St',
                'City' => 'City 3',
                'Region' => 'Region 4',
                'PostalCode' => '56789',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'CustomerID' => 4,
                'CompanyName' => 'Customer Company 4',
                'ContactName' => 'Nicolas Mahendra',
                'ContactTitle' => 'CEO',
                'Address' => '678 Main St',
                'City' => 'City 4',
                'Region' => 'Region 4',
                'PostalCode' => '98765',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'CustomerID' => 5,
                'CompanyName' => 'Customer Company 5',
                'ContactName' => 'Nicolas Rendi',
                'ContactTitle' => 'CEO',
                'Address' => '543 Main St',
                'City' => 'City 5',
                'Region' => 'Region 5',
                'PostalCode' => '65432',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
