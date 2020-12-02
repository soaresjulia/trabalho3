<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    DB::table('categorias')->insert([
    'nome' => 'Eletrônicos'
    ]);
    DB::table('categorias')->insert([
    'nome' => 'Móveis',
    ]);
    DB::table('categorias')->insert([
    'nome' => 'Limpeza',
    ]);
}
}
