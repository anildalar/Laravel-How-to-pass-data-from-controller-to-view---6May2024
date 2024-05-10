<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB; // DB is a class
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnimalSeeder extends Seeder
{
    //1. Property


    //2. Constructor


    //3. Methods
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // We need to create records in animals table
        //Scope Resolution operator ClassName::member
        // -> Member Selection Operator
        // Class::property
        
        // Class::method()
        //1. Query BUilder way
        DB::table('animals')->insert(
                            [
                                [
                                    'name'=>'COW',
                                    'created_at'=>DB::raw('CURRENT_TIMESTAMP'),
                                    'updated_at'=>DB::raw('CURRENT_TIMESTAMP')
                                ],
                                [
                                    'name'=>'DOG',
                                    'created_at'=>DB::raw('CURRENT_TIMESTAMP'),
                                    'updated_at'=>DB::raw('CURRENT_TIMESTAMP')
                                ],
                                [
                                    'name'=>'HORSE',
                                    'created_at'=>DB::raw('CURRENT_TIMESTAMP'),
                                    'updated_at'=>DB::raw('CURRENT_TIMESTAMP')
                                ]
                            ]
                           
                        ); // [] PHP Array

    }
}
