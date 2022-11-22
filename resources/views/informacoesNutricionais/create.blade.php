@extends('adminlte::page')

@section('content')
    <div>
        <br>
        <h3>Nova Informação Nutricional</h3>
        <br>
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
        <input type="hidden" name="alimento_id" value="{{$alimento->id}}">
    </div>

    <div class="form-group">
        {!! Form::label('legendaNutricional_id', 'Legenda:') !!}
        {!! Form::select(
            'legendaNutricional_id',
            \App\Models\LegendaNutricional::orderBy('descricao')->pluck('descricao', 'id')->toArray(),
            null,
            ['class' => 'form-control', 'required'],
        ) !!}
    </div>

    <div class="form-group">
        {!! Form::label('quantidade', 'Quantidade:') !!}
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
        <a class="btn btn-outline-danger" href="{{ route('informacoesNutricionais', ['alimento_id' => $alimento->id]) }}">Voltar</a>
    </div>

    {!! Form::close() !!}
@stop
