<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('produtos')->insert([
            'nome' => fake()->name(),
            'valor' => '20.00',
            'created_at' => now(),
            'updated_at' => now(),
            

        ]);
    }
}
