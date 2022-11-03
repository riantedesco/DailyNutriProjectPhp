@extends('adminlte::page')

@section('content')
    <h3>Novo Alimento</h3>

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    
    {!! Form::open(['route'=>'alimentos.store']) !!}

        <div class="form-group">
            {!! Form::label('nome', 'Nome:') !!}
            {!! Form::text('nome', null, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('quantidadePorcao', 'Quantidade por Porção:') !!}
            {!! Form::number('quantidadePorcao', null, ['class'=>'form-control', 'required', 'step'=>'any']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('unidadeMedida', 'Unidade de Medida:') !!}
            {!! Form::text('unidadeMedida', null, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('referencialMedida', 'Referencial de Medida:') !!}
            {!! Form::text('referencialMedida', null, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Criar Alimento', ['class'=>'btn btn-outline-success']) !!}
            {!! Form::reset('Limpar', ['class'=>'btn btn-outline-secondary']) !!}
            <a class="btn btn-outline-danger" href="{{ route('alimentos') }}">Voltar para alimentos</a>
        </div>

    {!! Form::close() !!}
@stop