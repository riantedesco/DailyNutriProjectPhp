@extends('adminlte::page')

@section('content')
    <h3>Editando Item</h3>

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    
    {!! Form::open(['route'=> ["itens.update", 'id'=>$item->id], 'method'=>'put']) !!}

        <div class="form-group">
            {!! Form::label('refeicao', 'Refeição:') !!}
            {!! Form::text('refeicao', $item->refeicao, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('alimento', 'Alimento:') !!}
            {!! Form::text('alimento', $item->alimento, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('quantidade', 'Quantidade:') !!}
            {!! Form::text('quantidade', $item->quantidade, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Editar Item', ['class'=>'btn btn-outline-success']) !!}
            {!! Form::reset('Limpar', ['class'=>'btn btn-outline-secondary']) !!}
            <a class="btn btn-outline-danger" href="{{ route('itens') }}">Voltar</a>
        </div>

    {!! Form::close() !!}
@stop