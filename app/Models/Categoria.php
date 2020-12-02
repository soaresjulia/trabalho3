<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    public function buscaCategoria()
    {
        $categorias= Categoria::all();
        foreach ($categorias as $dado) {
        $categoria[$dado->id] = $dado->nome;
        }
        return $categoria;
    }
}
