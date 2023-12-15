<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MajorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    $majors = [

        ['major' => 'Computer Science'],
        ['major' => 'Cyber Security'],
        ['major' => 'Mobile Programming']
    ];
        DB::table('majors')->insert($majors); 
    }
}
