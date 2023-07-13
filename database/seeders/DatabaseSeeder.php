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
        DB::table('clientes')->insert([
            'nome' => fake()->name(),
            'email' => fake()->email(),
            'endereco' => fake()->text(),
            'logradouro' => fake()->locale(),
            'cep'=> fake()->randomNumber(3),
            'bairro'=>fake()->jobTitle(),
            'created_at' => now(),
            'updated_at' => now(),


        ]);
        DB::table('vendas')->insert([
            'numero' => fake()->randomNumber(5),
            'produtos_id' => '50',
            'cliente_id' => '5',
            'created_at' => now(),
            'updated_at' => now(),


        ]);
    }
}
