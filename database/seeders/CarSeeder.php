<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Car; // I am import Car Model

class CarSeeder extends Seeder
{
    //1. Property


    //2. Constructor

    //3. Method
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        //1. QueryBuilder Statement CRUD
        //2. Elquent ORM Statemnt   CRUD
        //Class::method()
        Car::create([
            'brand_name' => 'TATA',
        ]);
    }
}
