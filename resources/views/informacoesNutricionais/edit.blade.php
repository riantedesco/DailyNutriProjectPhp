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
    
    {!! Form::open(['url'=>"informacoesNutricionais/$informacaoNutricional->id/update", 'method'=>'put']) !!}

        <div class="form-group">
            {!! Form::label('alimento', 'Alimento:') !!}
            {!! Form::text('alimento', $informacaoNutricional->alimento, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('valorEnergetico', 'Valor Energético:') !!}
            {!! Form::text('valorEnergetico', $informacaoNutricional->valorEnergetico, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('carboidratos', 'Carboidratos:') !!}
            {!! Form::text('carboidratos', $informacaoNutricional->carboidratos, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('proteinas', 'Proteínas:') !!}
            {!! Form::text('proteinas', $informacaoNutricional->proteinas, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('gordurasTotais', 'Gorduras Totais:') !!}
            {!! Form::text('gordurasTotais', $informacaoNutricional->gordurasTotais, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('gordurasSaturadas', 'Gorduras Saturadas:') !!}
            {!! Form::text('gordurasSaturadas', $informacaoNutricional->gordurasSaturadas, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('gordurasTrans', 'Gorduras Trans:') !!}
            {!! Form::text('gordurasTrans', $informacaoNutricional->gordurasTrans, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('gordurasInstauradas', 'Gorduras Instauradas:') !!}
            {!! Form::text('gordurasInstauradas', $informacaoNutricional->gordurasInstauradas, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('colesterol', 'Colesterol:') !!}
            {!! Form::text('colesterol', $informacaoNutricional->colesterol, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('fibraAlimentar', 'Fibra Alimentar:') !!}
            {!! Form::text('fibraAlimentar', $informacaoNutricional->fibraAlimentar, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('sodio', 'Sódio:') !!}
            {!! Form::text('sodio', $informacaoNutricional->sodio, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('calcio', 'Cálcio:') !!}
            {!! Form::text('calcio', $informacaoNutricional->calcio, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('ferro', 'Ferro:') !!}
            {!! Form::text('ferro', $informacaoNutricional->ferro, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('zinco', 'Zinco:') !!}
            {!! Form::text('zinco', $informacaoNutricional->zinco, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('vitaminaA', 'Vitamina A:') !!}
            {!! Form::text('vitaminaA', $informacaoNutricional->vitaminaA, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('vitaminaB', 'Vitamina B:') !!}
            {!! Form::text('vitaminaB', $informacaoNutricional->vitaminaB, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('vitaminaC', 'Vitamina C:') !!}
            {!! Form::text('vitaminaC', $informacaoNutricional->vitaminaC, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('vitaminaK', 'Vitamina K:') !!}
            {!! Form::text('vitaminaK', $informacaoNutricional->vitaminaK, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('vitaminaD', 'Vitamina D:') !!}
            {!! Form::text('vitaminaD', $informacaoNutricional->vitaminaD, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Editar Informação Nutricional', ['class'=>'btn btn-outline-success']) !!}
            {!! Form::reset('Limpar', ['class'=>'btn btn-outline-secondary']) !!}
            <a class="btn btn-outline-danger" href="{{ route('informacoesNutricionais') }}">Voltar</a>
        </div>

    {!! Form::close() !!}
@stop