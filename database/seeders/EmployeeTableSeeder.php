<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('employees')->insert([
            [
                'EmployeeID' => 1,
                'LastName' => 'Rendi',
                'FirstName' => 'Nico',
                'Title' => 'Manager',
                'TitleOfCourtesy' => 'Mr.',
                'BirthDate' => '1980-01-01',
                'HireDate' => '2020-01-01',
                'Address' => '123 Main St',
                'City' => 'City 1',
                'Region' => 'Region 1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'EmployeeID' => 2,
                'LastName' => 'Nico',
                'FirstName' => 'Mahe',
                'Title' => 'Manager',
                'TitleOfCourtesy' => 'Mr.',
                'BirthDate' => '1990-01-01',
                'HireDate' => '2020-01-01',
                'Address' => '123 Main St',
                'City' => 'City 2',
                'Region' => 'Region 2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'EmployeeID' => 3,
                'LastName' => 'Mahendra',
                'FirstName' => 'Rendi',
                'Title' => 'CEO',
                'TitleOfCourtesy' => 'Mr.',
                'BirthDate' => '2000-01-01',
                'HireDate' => '2020-01-01',
                'Address' => '123 Main St',
                'City' => 'City 3',
                'Region' => 'Region 3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'EmployeeID' => 4,
                'LastName' => 'Hendra',
                'FirstName' => 'Rendi',
                'Title' => 'CTO',
                'TitleOfCourtesy' => 'Mr.',
                'BirthDate' => '2002-01-01',
                'HireDate' => '2020-01-01',
                'Address' => '123 Main St',
                'City' => 'City 4',
                'Region' => 'Region 4',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'EmployeeID' => 5,
                'LastName' => 'Colas',
                'FirstName' => 'Nico',
                'Title' => 'CFO',
                'TitleOfCourtesy' => 'Mr.',
                'BirthDate' => '2005-01-01',
                'HireDate' => '2020-01-01',
                'Address' => '123 Main St',
                'City' => 'City 5',
                'Region' => 'Region 5',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
