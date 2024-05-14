<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LaptopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        //Create OPeration
        //1. Query Builder
        //Class::method()
        DB::table('laptops')->insert([ // Array of Associative array
                                        ['brand_name'=>'DELL'],
                                        ['brand_name'=>'LENOVA'],
                                        ['brand_name'=>'ACER'],
                                        ['brand_name'=>'SONY']
                                    ]);

        //2. Eleqoent ORM Object Relation Mapper
    }
}
