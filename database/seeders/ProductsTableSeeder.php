<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'ProductID' => 1,
                'ProductName' => 'Product 1',
                'SupplierID' => 1,
                'CategoryID' => 1,
                'QuantityPerUnit' => '10 units',
                'UnitsInStock' => 100,
                'UnitsOnOrder' => 50,
                'ReorderLevel' => 25,
                'Discontinued' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ProductID' => 2,
                'ProductName' => 'Product 2',
                'SupplierID' => 2,
                'CategoryID' => 2,
                'QuantityPerUnit' => '15 units',
                'UnitsInStock' => 150,
                'UnitsOnOrder' => 70,
                'ReorderLevel' => 30,
                'Discontinued' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ProductID' => 3,
                'ProductName' => 'Product 3',
                'SupplierID' => 3,
                'CategoryID' => 3,
                'QuantityPerUnit' => '20 units',
                'UnitsInStock' => 175,
                'UnitsOnOrder' => 100,
                'ReorderLevel' => 35,
                'Discontinued' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ProductID' => 4,
                'ProductName' => 'Product 4',
                'SupplierID' => 4,
                'CategoryID' => 4,
                'QuantityPerUnit' => '25 units',
                'UnitsInStock' => 200,
                'UnitsOnOrder' => 60,
                'ReorderLevel' => 15,
                'Discontinued' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ProductID' => 5,
                'ProductName' => 'Product 5',
                'SupplierID' => 5,
                'CategoryID' => 5,
                'QuantityPerUnit' => '50 units',
                'UnitsInStock' => 120,
                'UnitsOnOrder' => 70,
                'ReorderLevel' => 40,
                'Discontinued' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ProductID' => 6,
                'ProductName' => 'Product 6',
                'SupplierID' => 6,
                'CategoryID' => 6,
                'QuantityPerUnit' => '30 units',
                'UnitsInStock' => 100,
                'UnitsOnOrder' => 50,
                'ReorderLevel' => 25,
                'Discontinued' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ProductID' => 7,
                'ProductName' => 'Product 7',
                'SupplierID' => 7,
                'CategoryID' => 7,
                'QuantityPerUnit' => '8 units',
                'UnitsInStock' => 160,
                'UnitsOnOrder' => 60,
                'ReorderLevel' => 5,
                'Discontinued' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ProductID' => 8,
                'ProductName' => 'Product 8',
                'SupplierID' => 8,
                'CategoryID' => 8,
                'QuantityPerUnit' => '10 units',
                'UnitsInStock' => 10,
                'UnitsOnOrder' => 5,
                'ReorderLevel' => 2,
                'Discontinued' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ProductID' => 9,
                'ProductName' => 'Product 9',
                'SupplierID' => 9,
                'CategoryID' => 9,
                'QuantityPerUnit' => '100 units',
                'UnitsInStock' => 100,
                'UnitsOnOrder' => 50,
                'ReorderLevel' => 25,
                'Discontinued' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ProductID' => 10,
                'ProductName' => 'Product 10',
                'SupplierID' => 10,
                'CategoryID' => 10,
                'QuantityPerUnit' => '1 units',
                'UnitsInStock' => 100,
                'UnitsOnOrder' => 50,
                'ReorderLevel' => 25,
                'Discontinued' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
