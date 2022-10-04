@extends('adminlte::page')

@section('content')
    <h3>Novo Item</h3>

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    
    {!! Form::open(['url'=>'itens/store']) !!}

        <div class="form-group">
            {!! Form::label('refeicao', 'Refeição:') !!}
            {!! Form::text('refeicao', null, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('alimento', 'Alimento:') !!}
            {!! Form::text('alimento', null, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('quantidade', 'Quantidade:') !!}
            {!! Form::text('quantidade', null, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Criar Item', ['class'=>'btn btn-outline-success']) !!}
            {!! Form::reset('Limpar', ['class'=>'btn btn-outline-secondary']) !!}
            <a class="btn btn-outline-danger" href="{{ route('itens.listar') }}">Voltar</a>
        </div>

    {!! Form::close() !!}
@stop