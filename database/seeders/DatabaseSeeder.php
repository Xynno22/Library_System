<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this -> call([
            loanstatus::class, bookseeder::class, memberseeder::class, loanseeder::class, categoryseeder::class, MajorSeeder::class
          ]);
    }
}
