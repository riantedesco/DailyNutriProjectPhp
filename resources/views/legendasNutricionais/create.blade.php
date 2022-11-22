@extends('adminlte::page')

@section('content')
    <div>
        <br>
        <h2 style="font-family: serif;">Nova legenda nutricional</h2>
        <hr size="2">
    </div>

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['route' => 'legendasNutricionais.store']) !!}

    <div class="form-group">
        {!! Form::label('descricao', 'Descrição:') !!}
        <i style="font-size: 15px">(Ex: Sódio)</i>
        {!! Form::text('descricao', null, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('unidadeMedida', 'Unidade de Medida:') !!}
        <i style="font-size: 15px">(Ex: gramas)</i>
        {!! Form::text('unidadeMedida', null, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Criar Legenda Nutricional', ['class' => 'btn btn-outline-success']) !!}
        {!! Form::reset('Limpar', ['class' => 'btn btn-outline-secondary']) !!}
        <a class="btn btn-outline-danger" href="{{ route('legendasNutricionais') }}">Voltar</a>
    </div>

    {!! Form::close() !!}
@stop
