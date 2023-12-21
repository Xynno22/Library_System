<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class loanstatus extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $status = [
            [
                'status' => 'Returned'
            ],
            [
                'status' => 'Delay'
            ],
            [
                'status' => 'Borrowed'
            ],
        ];

        DB::table('statuses')->insert($status);
    }
}
