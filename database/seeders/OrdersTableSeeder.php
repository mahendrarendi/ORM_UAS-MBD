<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('orders')->insert([
            [
                'OrderID' => 1,
                'CustomerID' => 1,
                'EmployeeID' => 1,
                'OrderDate' => '2023-01-01',
                'RequireDate' => '2023-01-05',
                'ShippedDate' => '2023-01-03',
                'ShipVia' => 1,
                'Freight' => 12.50,
                'ShipName' => 'Rendi Jhon',
                'ShipAddress' => '123 Main St',
                'ShipCity' => 'City 1',
                'ShipRegion' => 'Region 1',
                'ShipPostalCode' => '12345',
                'ShipCountry' => 'Country 1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'OrderID' => 2,
                'CustomerID' => 2,
                'EmployeeID' => 2,
                'OrderDate' => '2020-01-01',
                'RequireDate' => '2020-01-05',
                'ShippedDate' => '2020-01-03',
                'ShipVia' => 2,
                'Freight' => 13.50,
                'ShipName' => 'Rendi Hendra',
                'ShipAddress' => '321 Main St',
                'ShipCity' => 'City 2',
                'ShipRegion' => 'Region 2',
                'ShipPostalCode' => '34521',
                'ShipCountry' => 'Country 2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'OrderID' => 3,
                'CustomerID' => 3,
                'EmployeeID' => 3,
                'OrderDate' => '2021-01-01',
                'RequireDate' => '2021-01-05',
                'ShippedDate' => '2021-01-03',
                'ShipVia' => 3,
                'Freight' => 14.50,
                'ShipName' => 'Rendi Nico',
                'ShipAddress' => '456 Main St',
                'ShipCity' => 'City 3',
                'ShipRegion' => 'Region 3',
                'ShipPostalCode' => '98765',
                'ShipCountry' => 'Country 3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'OrderID' => 4,
                'CustomerID' => 4,
                'EmployeeID' => 4,
                'OrderDate' => '2022-01-01',
                'RequireDate' => '2022-01-05',
                'ShippedDate' => '2022-01-03',
                'ShipVia' => 4,
                'Freight' => 15.50,
                'ShipName' => 'Rendi Mahe',
                'ShipAddress' => '789 Main St',
                'ShipCity' => 'City 4',
                'ShipRegion' => 'Region 4',
                'ShipPostalCode' => '12789',
                'ShipCountry' => 'Country 4',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'OrderID' => 5,
                'CustomerID' => 5,
                'EmployeeID' => 5,
                'OrderDate' => '2019-01-01',
                'RequireDate' => '2019-01-05',
                'ShippedDate' => '2019-01-03',
                'ShipVia' => 5,
                'Freight' => 16.50,
                'ShipName' => 'Mahendra Rendi',
                'ShipAddress' => '345 Main St',
                'ShipCity' => 'City 5',
                'ShipRegion' => 'Region 5',
                'ShipPostalCode' => '12345',
                'ShipCountry' => 'Country 5',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
