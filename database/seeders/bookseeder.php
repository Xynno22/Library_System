<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;



class bookseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $books = [
            [
                'category_id' => '1',
                'image' => 'TheMind.png',
                'title' => 'okee',
                'author' => 'annin',
                'publisher' =>'dnun',
                'publication_year' => '1990',
                'sypnosis'=> 'aaaaaaaa',
                'stock' => '10'
            ],
            [
                'category_id' => '1',
                'image' => 'TheMind.png',
                'title' => 'okee',
                'author' => 'annin',
                'publisher' =>'dnun',
                'publication_year' => '1990',
                'sypnosis'=> 'aaaaaaaa',
                'stock' => '10'
            ],
            [
                'category_id' => '1',
                'image' => 'TheMind.png',
                'title' => 'okee',
                'author' => 'annin',
                'publisher' =>'dnun',
                'publication_year' => '1990',
                'sypnosis'=> 'aaaaaaaa',
                'stock' => '10'
            ],
            [
                'category_id' => '1',
                'image' => 'TheMind.png',
                'title' => 'okee',
                'author' => 'annin',
                'publisher' =>'dnun',
                'publication_year' => '1990',
                'sypnosis'=> 'aaaaaaaa',
                'stock' => '10'
            ],
            [
                'category_id' => '1',
                'image' => 'TheMind.png',
                'title' => 'okee',
                'author' => 'annin',
                'publisher' =>'dnun',
                'publication_year' => '1990',
                'sypnosis'=> 'aaaaaaaa',
                'stock' => '10'
            ],
            [
                'category_id' => '1',
                'image' => 'TheMind.png',
                'title' => 'okee',
                'author' => 'annin',
                'publisher' =>'dnun',
                'publication_year' => '1990',
                'sypnosis'=> 'aaaaaaaa',
                'stock' => '10'
            ],
            [
                'category_id' => '1',
                'image' => 'TheMind.png',
                'title' => 'okee',
                'author' => 'annin',
                'publisher' =>'dnun',
                'publication_year' => '1990',
                'sypnosis'=> 'aaaaaaaa',
                'stock' => '10'
            ],
            [
                'category_id' => '1',
                'image' => 'TheMind.png',
                'title' => 'okee',
                'author' => 'annin',
                'publisher' =>'dnun',
                'publication_year' => '1990',
                'sypnosis'=> 'aaaaaaaa',
                'stock' => '10'
            ]

        ];

        DB::table('books')->insert($books); 
    }
}
