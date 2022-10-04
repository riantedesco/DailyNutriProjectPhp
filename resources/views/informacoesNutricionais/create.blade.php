@extends('adminlte::page')

@section('content')
    <h3>Nova Informação Nutricional</h3>

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    
    {!! Form::open(['url'=>'informacoesNutricionais/store']) !!}

        <div class="form-group">
            {!! Form::label('alimento', 'Alimento:') !!}
            {!! Form::text('nome', null, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('valorEnergetico', 'Valor Energético:') !!}
            {!! Form::text('valorEnergetico', null, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('carboidratos', 'Carboidratos:') !!}
            {!! Form::text('carboidratos', null, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('proteinas', 'Proteínas:') !!}
            {!! Form::text('proteinas', null, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('gordurasTotais', 'Gorduras Totais:') !!}
            {!! Form::text('gordurasTotais', null, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('gordurasSaturadas', 'Gorduras Saturadas:') !!}
            {!! Form::text('gordurasSaturadas', null, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('gordurasTrans', 'Gorduras Trans:') !!}
            {!! Form::text('gordurasTrans', null, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('gordurasInstauradas', 'Gorduras Instauradas:') !!}
            {!! Form::text('gordurasInstauradas', null, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('colesterol', 'Colesterol:') !!}
            {!! Form::text('colesterol', null, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('fibraAlimentar', 'Fibra Alimentar:') !!}
            {!! Form::text('fibraAlimentar', null, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('sodio', 'Sódio:') !!}
            {!! Form::text('sodio', null, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('calcio', 'Cálcio:') !!}
            {!! Form::text('calcio', null, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('ferro', 'Ferro:') !!}
            {!! Form::text('ferro', null, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('zinco', 'Zinco:') !!}
            {!! Form::text('zinco', null, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('vitaminaA', 'Vitamina A:') !!}
            {!! Form::text('vitaminaA', null, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('vitaminaB', 'Vitamina B:') !!}
            {!! Form::text('vitaminaB', null, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('vitaminaC', 'Vitamina C:') !!}
            {!! Form::text('vitaminaC', null, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('vitaminaK', 'Vitamina K:') !!}
            {!! Form::text('vitaminaK', null, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('vitaminaD', 'Vitamina D:') !!}
            {!! Form::text('vitaminaD', null, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Criar Informação Nutricional', ['class'=>'btn btn-outline-success']) !!}
            {!! Form::reset('Limpar', ['class'=>'btn btn-outline-secondary']) !!}
            <a class="btn btn-outline-danger" href="{{ route('informacoesNutricionais.listar') }}">Voltar</a>
        </div>

    {!! Form::close() !!}
@stop