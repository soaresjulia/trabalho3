<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Categoria;


    class ProdutoController extends Controller

    {

    public function __construct()
    {
        $this->middleware('auth')->only(['create', 'update', 'destroy']);
    }
    
    public function index()
    {
        $produtos = Produto::all();
        return view('produto', compact('produtos'));
    }

    public function create()
    {
    $title = "Criação de Produto";
    $categoria = new Categoria;
    $categorias = $categoria->buscaCategoria();
    return view('insereProduto', compact('title', 'categorias'));
    }

    public function store(Request $request)
        {
        $dataForm = $request->except('_token');
        // valida as entradas do formulário
        $produto = new Produto;
        $this->validate($request, $produto->rules, $produto->messages);

        $insert = Produto::create($dataForm);

        if($insert)
            return redirect()->route('produto.index');
        else
            return redirect()->route('produto.create');

        }
}
