@extends('adminlte::page')

@section('content')
    <h3>Editanto Informação Nutricional</h3>

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    
    {!! Form::open(['route'=> ["informacoesNutricionais.update", 'id'=>$informacaoNutricional->id], 'method'=>'put']) !!}

        <div class="form-group">
            {!! Form::label('alimento_id', 'Alimento:') !!}
            {!! Form::select('alimento_id', \App\Models\Alimento::orderBy('nome')->pluck('nome', 'id')->toArray(), $informacaoNutricional->alimento_id, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('legendaNutricional_id', 'Legenda Nutricional:') !!}
            {!! Form::select('legendaNutricional_id', \App\Models\LegendaNutricional::orderBy('descricao')->pluck('descricao', 'id')->toArray(), $informacaoNutricional->alimento_id, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('quantidade', 'Quantidade:') !!}
            {!! Form::number('quantidade', $informacaoNutricional->valorEnergetico, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('valorDiario', 'Valor Diário (%):') !!}
            {!! Form::number('valorDiario', $informacaoNutricional->carboidratos, ['class'=>'form-control', 'required']) !!}
        </div>

        <div>
            <i style="color:#9B111E">% Valores diários com base em uma dieta de 2000kcal. Seus valores diários podem ser maiores ou menores dependendo de suas necessidades energéticas.</i>
        </div>
        <br>

        <div class="form-group">
            {!! Form::submit('Editar Informação Nutricional', ['class'=>'btn btn-outline-success']) !!}
            {!! Form::reset('Limpar', ['class'=>'btn btn-outline-secondary']) !!}
            <a class="btn btn-outline-danger" href="{{ route('informacoesNutricionais') }}">Voltar</a>
        </div>

    {!! Form::close() !!}
@stop