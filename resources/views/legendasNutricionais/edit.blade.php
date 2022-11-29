@extends('adminlte::page')

@section('content')
    <div>
        <br>
        <h2 style="font-family: serif;">Editando legenda nutricional: {{ $legendaNutricional->descricao }} </h2>
        <hr size="2">
    </div>

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['route' => ['legendasNutricionais.update', 'id' => $legendaNutricional->id], 'method' => 'put']) !!}

    <div class="form-group">
        {!! Form::label('descricao', 'Descrição:') !!}
        <i style="font-size: 15px">(Ex: Sódio)</i>
        {!! Form::text('descricao', $legendaNutricional->descricao, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('unidade', 'Unidade de Medida:') !!}
        <i style="font-size: 15px">(Ex: gramas)</i>
        {!! Form::text('unidade', $legendaNutricional->unidade, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Editar Legenda Nutricional', ['class' => 'btn btn-outline-success']) !!}
        {!! Form::reset('Limpar', ['class' => 'btn btn-outline-secondary']) !!}
        <a class="btn btn-outline-danger" href="{{ route('legendasNutricionais') }}">Voltar</a>
    </div>

    {!! Form::close() !!}
@stop
