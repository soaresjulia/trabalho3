<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
{
    DB::table('products')->insert([
    'nome' => 'Produto Eletrônico',
    'descricao' => 'teste de eletronico',
    'categoria_id' => '1'
]);
    DB::table('products')->insert([
    'nome' => 'Produto Móveis',
    'descricao' => 'teste de móveis',
    'categoria_id' => '2'
]);
    DB::table('products')->insert([
    'nome' => 'Produto Limpeza',
    'descricao' => 'teste de limpeza',
    'categoria_id' => '3'
]);
    DB::table('products')->insert([
    'nome' => 'OMO',
    'descricao' => 'Sabão Líquido OMO',
    'categoria_id' => '3'
]);
    DB::table('products')->insert([
    'nome' => 'Xiaomi',
    'descricao' => 'Exemplo de Celular Xiaomi',
    'categoria_id' => '1'
]);
    DB::table('products')->insert([
    'nome' => 'Sofá',
    'descricao' => 'Exemplo de Sofá',
    'categoria_id' => '2'
]);
    DB::table('products')->insert([
    'nome' => 'Logo do Ifsul',
    'descricao' => 'Exemplo de produto com imagem do IFsul',
    'categoria_id' => '1'
]);
    }
}
