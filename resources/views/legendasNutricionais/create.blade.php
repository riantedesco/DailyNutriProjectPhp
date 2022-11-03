@extends('adminlte::page')

@section('content')
    <h3>Nova Legenda Nutricional</h3>

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    
    {!! Form::open(['route'=>'legendasNutricionais.store']) !!}

        <div class="form-group">
            {!! Form::label('descricao', 'Descrição:') !!}
            {!! Form::text('descricao', null, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('unidadeMedida', 'Unidade de Medida:') !!}
            {!! Form::text('unidadeMedida', null, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Criar Legenda Nutricional', ['class'=>'btn btn-outline-success']) !!}
            {!! Form::reset('Limpar', ['class'=>'btn btn-outline-secondary']) !!}
            <a class="btn btn-outline-danger" href="{{ route('legendasNutricionais') }}">Voltar</a>
        </div>

    {!! Form::close() !!}
@stop