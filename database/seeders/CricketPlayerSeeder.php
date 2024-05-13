<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CricketPlayer;


class CricketPlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // I want to do the create operation
        //Class::method()
        //CricketPlayer::create(); // If you want to insert a single record
        CricketPlayer::insert([ //Array of Associative array
                                ['name'=>'MS Dhoni'],
                                ['name'=>'Rohit SHarma'],
                                ['name'=>'Shubhman Gill']
                              ]); // If you want to insert a mulitple record

    }
}
