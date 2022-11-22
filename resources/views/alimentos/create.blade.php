@extends('adminlte::page')

@section('content')
    <div>
        <br>
        <h2 style="font-family: serif;">Novo alimento</h2>
        <hr size="2">
    </div>

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['route' => 'alimentos.store']) !!}

    <div class="form-group">
        {!! Form::label('nome', 'Nome:') !!}
        <i style="font-size: 15px">(Ex: Arroz branco)</i>
        {!! Form::text('nome', null, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('quantidadePorcao', 'Quantidade por Porção:') !!}
        <i style="font-size: 15px">(Quantidade a ser baseada para tabela nutricional. Ex: 50)</i>
        {!! Form::number('quantidadePorcao', null, ['class' => 'form-control', 'required', 'step' => 'any']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('unidadeMedida', 'Unidade de Medida:') !!}
        <i style="font-size: 15px">(Unidade de medida referente à quantidade. Ex: gramas)</i>
        {!! Form::text('unidadeMedida', null, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('referencialMedida', 'Referencial de Medida:') !!}
        <i style="font-size: 15px">(Medida referencial que equivale à quantidade informada. Ex: 1/4 xícara)</i>
        {!! Form::text('referencialMedida', null, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Criar Alimento', ['class' => 'btn btn-outline-success']) !!}
        {!! Form::reset('Limpar', ['class' => 'btn btn-outline-secondary']) !!}
        <a class="btn btn-outline-danger" href="{{ route('alimentos') }}">Voltar para alimentos</a>
    </div>

    {!! Form::close() !!}
@stop
