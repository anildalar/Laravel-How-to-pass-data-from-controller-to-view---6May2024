<?php

namespace Database\Seeders;

use App\Models\StudentModel;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    //1 Propery



    //2. Constructor


    //3. Methods
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // User::factory(10)->create();
        //QueryBuilder
        DB::table('students')->insert([
            'name' => 'yash',
            'surname' => 'mali',
            'fname' => 'bhwarlalji',
            'mname' => 'pinkiji',
            'mobno' => '798798987968',
        ]);
    }
}
