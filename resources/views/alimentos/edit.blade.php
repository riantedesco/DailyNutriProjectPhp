@extends('adminlte::page')

@section('content')
    <div>
        <br>
        <h2 style="font-family: serif;">Editando alimento: {{ $alimento->nome }} </h2>
        <hr size="2">
    </div>

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['route' => ['alimentos.update', 'id' => $alimento->id], 'method' => 'put']) !!}

    <div class="form-group">
        {!! Form::label('nome', 'Nome:') !!}
        <i style="font-size: 15px">(Ex: Arroz branco)</i>
        {!! Form::text('nome', $alimento->nome, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('quantidade', 'Quantidade por Porção:') !!}
        <i style="font-size: 15px">(Quantidade a ser baseada para tabela nutricional. Ex: 50)</i>
        {!! Form::number('quantidade', $alimento->quantidade, ['class' => 'form-control', 'required', 'step' => 'any']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('unidade', 'Unidade de Medida:') !!}
        <i style="font-size: 15px">(Unidade de medida referente à quantidade. Ex: gramas)</i>
        {!! Form::text('unidade', $alimento->unidade, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('referencial', 'Referencial da Medida:') !!}
        <i style="font-size: 15px">(Medida referencial que equivale à quantidade informada. Ex: 1/4 xícara)</i>
        {!! Form::text('referencial', $alimento->referencial, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Editar Alimento', ['class' => 'btn btn-outline-success']) !!}
        {!! Form::reset('Limpar', ['class' => 'btn btn-outline-secondary']) !!}
        <a class="btn btn-outline-danger" href="{{ route('alimentos') }}">Voltar</a>
    </div>

    {!! Form::close() !!}
@stop
