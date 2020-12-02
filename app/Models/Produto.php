<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    
    use HasFactory;

    public $rules = [
        'nome' => 'required|min:3|max:100',
        'categoria_id' => 'required',
        'descricao' => 'required|min:10|max:100',
        ];
        // mensagens impressas quando ocorrer algum erro na validação
        public $messages = [
        'nome.required' => 'O campo nome é obrigatório',
        'nome.min' => 'O campo nome deve ter no mínio 3 caracteres',
        'categoria_id.required' => 'O campo categoria é obrigatório',
        'descricao.required' => 'O campo descrição é obrigatório',
        'descricao.min' => 'O campo descrição deve ter no minímo 10 caracteres',
        ];

    public $timestamps = false;
    protected $fillable = ['nome', 'descricao', 'categoria_id', 'imagem'];
    protected $table = 'products';

}
