@extends('adminlte::page')

@section('content')
    <div>
        <br>
        <h2 style="font-family: serif;">Nova informação nutricional</h2>
        <hr size="2">
    </div>

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['route' => 'informacoesNutricionais.store']) !!}

    <div>
        <input type="hidden" name="alimento_id" value="{{ $alimento->id }}">
    </div>

    <div class="form-group">
        {!! Form::label('legendaNutricional_id', 'Legenda:') !!}
        {!! Form::select(
            'legendaNutricional_id',
            \App\Models\LegendaNutricional::select(DB::raw("CONCAT(descricao, ' - ', unidade) AS name"), 'id')->pluck('name', 'id')->toArray(),
            null,
            ['class' => 'form-control', 'required', 'onchange' => 'document.getElementById("quantidade").innerHTML = "Informe de acordo com a unidade de medida da legenda nutricional selecionada!"'],
        ) !!}
    </div>

    <div class="form-group">
        {!! Form::label('quantidade', 'Quantidade:') !!}
        <i style="font-size: 15px; color: brown" id="quantidade"></i>
        {!! Form::number('quantidade', null, ['class' => 'form-control', 'required', 'step' => 'any']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('valorDiario', 'Valor diário (%):') !!}
        {!! Form::number('valorDiario', null, ['class' => 'form-control', 'required', 'step' => 'any']) !!}
    </div>

    <div>
        <i style="color:#9B111E">% Valores diários com base em uma dieta de 2000kcal. Seus valores diários podem ser maiores
            ou menores dependendo de suas necessidades energéticas.</i>
    </div>
    <br>

    <div class="form-group">
        {!! Form::submit('Criar Informação Nutricional', ['class' => 'btn btn-outline-success']) !!}
        {!! Form::reset('Limpar', ['class' => 'btn btn-outline-secondary']) !!}
        <a class="btn btn-outline-danger"
            href="{{ route('informacoesNutricionais', ['alimento_id' => $alimento->id]) }}">Voltar</a>
    </div>

    {!! Form::close() !!}
@stop
