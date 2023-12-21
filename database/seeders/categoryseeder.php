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
            ],
            [
                'category' => 'Thriller'
            ],
            [
                'category' => 'Comedy'
            ],
            [
                'category' => 'Mystery'
            ],
            [
                'category' => 'Adventure'
            ],
            [
                'category' => 'Historical'
            ],
            [
                'category' => 'Crime'
            ],
            [
                'category' => 'Drama'
            ],
        ];

        DB::table('categories')->insert($category); 
    }
}

