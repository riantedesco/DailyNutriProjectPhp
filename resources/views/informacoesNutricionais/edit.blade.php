@extends('adminlte::page')

@section('content')
    <div>
        <br>
        <h2 style="font-family: serif;">Editando informação nutricional: {{ isset($informacaoNutricional->legendaNutricional->descricao) }}</h2>
        <hr size="2">
    </div>

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['route' => ['informacoesNutricionais.update', 'id' => $informacaoNutricional->id], 'method' => 'put']) !!}

    <div class="form-group">
        {!! Form::label('quantidade', 'Quantidade:') !!}
        <i style="font-size: 15px">(Medida em: {{ isset($informacaoNutricional->legendaNutricional->unidadeMedida) }})</i>
        {!! Form::number('quantidade', $informacaoNutricional->quantidade, [
            'class' => 'form-control',
            'required',
            'step' => 'any',
        ]) !!}
    </div>

    <div class="form-group">
        {!! Form::label('valorDiario', 'Valor Diário (%):') !!}
        {!! Form::number('valorDiario', $informacaoNutricional->valorDiario, [
            'class' => 'form-control',
            'required',
            'step' => 'any',
        ]) !!}
    </div>

    <div>
        <i style="color:#9B111E">% Valores diários com base em uma dieta de 2000kcal. Seus valores diários podem ser maiores
            ou menores dependendo de suas necessidades energéticas.</i>
    </div>
    <br>

    <div class="form-group">
        {!! Form::submit('Editar Informação Nutricional', ['class' => 'btn btn-outline-success']) !!}
        {!! Form::reset('Limpar', ['class' => 'btn btn-outline-secondary']) !!}
        <a class="btn btn-outline-danger"
            href="{{ route('informacoesNutricionais', ['alimento_id' => $informacaoNutricional->alimento_id]) }}">Voltar</a>
    </div>

    {!! Form::close() !!}
@stop
