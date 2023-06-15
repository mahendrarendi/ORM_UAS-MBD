<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(SuppliersTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(CustomersTableSeeder::class);
        $this->call(EmployeeTableSeeder::class);
        $this->call(OrdersTableSeeder::class);
        $this->call(OrdersDetailsTableSeeder::class);
        $this->call(ShippersTableSeeder::class);
    }
}
