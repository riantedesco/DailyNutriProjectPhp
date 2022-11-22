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
        {!! Form::label('quantidadePorcao', 'Quantidade por Porção:') !!}
        <i style="font-size: 15px">(Quantidade a ser baseada para tabela nutricional. Ex: 50)</i>
        {!! Form::number('quantidadePorcao', $alimento->quantidadePorcao, ['class' => 'form-control', 'required', 'step' => 'any']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('unidadeMedida', 'Unidade de Medida:') !!}
        <i style="font-size: 15px">(Unidade de medida referente à quantidade. Ex: gramas)</i>
        {!! Form::text('unidadeMedida', $alimento->unidadeMedida, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('referencialMedida', 'Referencial da Medida:') !!}
        <i style="font-size: 15px">(Medida referencial que equivale à quantidade informada. Ex: 1/4 xícara)</i>
        {!! Form::text('referencialMedida', $alimento->referencialMedida, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Editar Alimento', ['class' => 'btn btn-outline-success']) !!}
        {!! Form::reset('Limpar', ['class' => 'btn btn-outline-secondary']) !!}
        <a class="btn btn-outline-danger" href="{{ route('alimentos') }}">Voltar</a>
    </div>

    {!! Form::close() !!}
@stop
