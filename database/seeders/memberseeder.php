<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class memberseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $loans = [
            [
                'name' => 'Nicholas Jackson',
                'address' => 'Gang Lontar no 10 a',
                'phonenumber' => '081384108673',
                'email' => 'nicholas@gmail.com',
                'department' => 'Computer Science'
            ], 
            
            [
                'name' => 'Alvin',
                'address' => 'rumah alv no 10 a',
                'phonenumber' => '081382222673',
                'email' => 'alvin@gmail.com',
                'department' => 'Computer Science'
            ],

            [
                'name' => 'Jay',
                'address' => 'Donomor no 19 a',
                'phonenumber' => '081388112673',
                'email' => 'jay@gmail.com',
                'department' => 'Computer Science'
            ],

            [
                'name' => 'Budi',
                'address' => 'rumah susi no 10 a',
                'phonenumber' => '081381122673',
                'email' => 'budi@gmail.com',
                'department' => 'Computer Science'
            ],

            [
                'name' => 'kennis',
                'address' => 'rumah niic no 10 a',
                'phonenumber' => '081399222873',
                'email' => 'kennis@gmail.com',
                'department' => 'Computer Science'
            ]
        ];

        DB::table('members')->insert($loans);  
    }
}
