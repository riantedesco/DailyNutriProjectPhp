@extends('adminlte::page')

@section('content')
    <h3>Editando Alimento: {{ $alimento->nome }} </h3>

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    
    {!! Form::open(['route'=> ["alimentos.update", 'id'=>$alimento->id], 'method'=>'put']) !!}

        <div class="form-group">
            {!! Form::label('nome', 'Nome:') !!}
            {!! Form::text('nome', $alimento->nome, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('unidadeMedida', 'Unidade de Medida:') !!}
            {!! Form::text('unidadeMedida', $alimento->unidadeMedida, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('quantidadePorcao', 'Quantidade por Porção:') !!}
            {!! Form::number('quantidadePorcao', $alimento->quantidadePorcao, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Editar Ator', ['class'=>'btn btn-outline-success']) !!}
            {!! Form::reset('Limpar', ['class'=>'btn btn-outline-secondary']) !!}
            <a class="btn btn-outline-danger" href="{{ route('alimentos') }}">Voltar</a>
        </div>

    {!! Form::close() !!}
@stop