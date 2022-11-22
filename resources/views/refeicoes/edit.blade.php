@extends('adminlte::page')

@section('content')
    <div>
        <br>
        <h2 style="font-family: serif;">Editando refeicao: {{ $refeicao->titulo }} </h2>
        <hr size="2">
    </div>

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['route'=> ["refeicoes.update", 'id'=>$refeicao->id], 'method'=>'put']) !!}

        <div class="form-group">
            {!! Form::label('titulo', 'Título:') !!}
            {!! Form::text('titulo', $refeicao->titulo, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('descricao', 'Descrição:') !!}
            {!! Form::text('descricao', $refeicao->descricao, ['class'=>'form-control', 'required', 'rows' => '3']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('dataHora', 'Data e Hora:') !!}
            {!! Form::datetimelocal('dataHora', $refeicao->dataHora, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Editar Refeição', ['class'=>'btn btn-outline-success']) !!}
            {!! Form::reset('Limpar', ['class'=>'btn btn-outline-secondary']) !!}
            <a class="btn btn-outline-danger" href="{{ route('refeicoes') }}">Voltar</a>
        </div>

    {!! Form::close() !!}
@stop