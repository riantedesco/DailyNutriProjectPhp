@extends('adminlte::page')

@section('content')
    <h3>Nova Informação Nutricional</h3>

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    
    {!! Form::open(['route'=>'informacoesNutricionais.store']) !!}

        <div class="form-group">
            {!! Form::label('alimento_id', 'Alimento:') !!}
            {!! Form::select('alimento_id', \App\Models\Alimento::orderBy('nome')->pluck('nome', 'id')->toArray(), null, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('legendaNutricional_id', 'Legenda:') !!}
            {!! Form::select('legendaNutricional_id', \App\Models\LegendaNutricional::orderBy('descricao')->pluck('descricao', 'id')->toArray(), null, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('quantidade', 'Quantidade:') !!}
            {!! Form::number('quantidade', null, ['class'=>'form-control', 'required', 'step'=>'any']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('valorDiario', 'Valor diário (%):') !!}
            {!! Form::number('valorDiario', null, ['class'=>'form-control', 'required', 'step'=>'any']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Criar Informação Nutricional', ['class'=>'btn btn-outline-success']) !!}
            {!! Form::reset('Limpar', ['class'=>'btn btn-outline-secondary']) !!}
            <a class="btn btn-outline-danger" href="{{ route('informacoesNutricionais') }}">Voltar</a>
        </div>

    {!! Form::close() !!}
@stop