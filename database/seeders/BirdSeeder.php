<?php

namespace Database\Seeders;

use App\Models\Bird;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BirdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Bird::create([
            'name' => 'Parrot',
        ]);
        /* DB::table('birds')->insert([
            [

                'name' => 'Parrot',
                'created_at' =>  DB::raw('CURRENT_TIMESTAMP'),
                'updated_at' =>  DB::raw('CURRENT_TIMESTAMP'),
            ]
        ]); */
    }
}
