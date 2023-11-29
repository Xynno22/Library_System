<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class categoryseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = [
            [
                'category' => 'Fantasy'
            ],
            [
                'category' => 'Romance'
            ],
            [
                'category' => 'Biography'
            ],
            [
                'category' => 'Horor'
            ]
        ];

        DB::table('categories')->insert($category); 
    }
}

