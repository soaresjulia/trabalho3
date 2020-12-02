@extends('template')
@section('content')
    
    @if(isset($errors) && count($errors) > 0)
    <div class="alert alert-danger">
    @foreach($errors->all() as $error)
    <p> {{$error}} </p>
    @endforeach
    </div>
    @endif


    {!! Form::open(['route' => 'produto.store', 'class' => 'form', 'enctype'=>'multipart/form-data']) !!}
    <div class="form-group">
        {!! Form::text('nome', null, ['class' => 'form', 'placeholder' => 'Nome:']) !!}
    </div>
    <div class="form-group">
        {!! Form::select('categoria_id', $categorias, null, ['class' => 'form', 'placeholder' => "Escolha a Categoria"]) !!}
    </div>
    <div class="form-group">
        {!! Form::textarea('descricao', null, ['class' => 'form', 'placeholder' => 'Descrição:']) !!}
    </div>
        {!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}


@endsection