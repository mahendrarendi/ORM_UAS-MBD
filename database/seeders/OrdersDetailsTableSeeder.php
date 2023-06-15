<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrdersDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('OrderDetails')->insert([
            [
                'OrderID' => 1,
                'ProductID' => 1,
                'UnitPrice' => 10.99,
                'Quantity' => 5,
                'Discount' => 0.1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'OrderID' => 2,
                'ProductID' => 2,
                'UnitPrice' => 20.99,
                'Quantity' => 10,
                'Discount' => 0.1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'OrderID' => 3,
                'ProductID' => 3,
                'UnitPrice' => 30.99,
                'Quantity' => 15,
                'Discount' => 0.1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'OrderID' => 4,
                'ProductID' => 4,
                'UnitPrice' => 40.99,
                'Quantity' => 25,
                'Discount' => 0.1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'OrderID' => 5,
                'ProductID' => 5,
                'UnitPrice' => 50.99,
                'Quantity' => 5,
                'Discount' => 0.1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'OrderID' => 6,
                'ProductID' => 6,
                'UnitPrice' => 60.99,
                'Quantity' => 6,
                'Discount' => 0.1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'OrderID' => 7,
                'ProductID' => 7,
                'UnitPrice' => 70.99,
                'Quantity' => 20,
                'Discount' => 0.1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'OrderID' => 8,
                'ProductID' => 8,
                'UnitPrice' => 80.99,
                'Quantity' => 10,
                'Discount' => 0.1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'OrderID' => 9,
                'ProductID' => 9,
                'UnitPrice' => 90.99,
                'Quantity' => 20,
                'Discount' => 0.1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'OrderID' => 10,
                'ProductID' => 10,
                'UnitPrice' => 99.99,
                'Quantity' => 10,
                'Discount' => 0.1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'OrderID' => 11,
                'ProductID' => 11,
                'UnitPrice' => 10.99,
                'Quantity' => 10,
                'Discount' => 0.1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'OrderID' => 12,
                'ProductID' => 12,
                'UnitPrice' => 20.99,
                'Quantity' => 20,
                'Discount' => 0.1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'OrderID' => 13,
                'ProductID' => 13,
                'UnitPrice' => 30.99,
                'Quantity' => 15,
                'Discount' => 0.1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'OrderID' => 14,
                'ProductID' => 14,
                'UnitPrice' => 40.99,
                'Quantity' => 25,
                'Discount' => 0.1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'OrderID' => 15,
                'ProductID' => 15,
                'UnitPrice' => 50.99,
                'Quantity' => 15,
                'Discount' => 0.1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'OrderID' => 16,
                'ProductID' => 16,
                'UnitPrice' => 60.99,
                'Quantity' => 20,
                'Discount' => 0.1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'OrderID' => 17,
                'ProductID' => 17,
                'UnitPrice' => 70.99,
                'Quantity' => 20,
                'Discount' => 0.1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'OrderID' => 18,
                'ProductID' => 18,
                'UnitPrice' => 80.99,
                'Quantity' => 10,
                'Discount' => 0.1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'OrderID' => 19,
                'ProductID' => 19,
                'UnitPrice' => 90.99,
                'Quantity' => 20,
                'Discount' => 0.1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'OrderID' => 20,
                'ProductID' => 20,
                'UnitPrice' => 99.99,
                'Quantity' => 20,
                'Discount' => 0.1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
