@extends('adminlte::page')

@section('content')
    <h3>Editando Refeição: {{ $refeicao->titulo }} </h3>

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
            {!! Form::text('descricao', $refeicao->descricao, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('dataHora', 'Data e Hora:') !!}
            {!! Form::datetimelocal('dataHora', $refeicao->dataHora, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('user_id', 'User:') !!}
            {!! Form::select('user_id', \App\Models\User::orderBy('name')->pluck('name', 'id')->toArray(), $refeicao->user_id, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Editar Refeição', ['class'=>'btn btn-outline-success']) !!}
            {!! Form::reset('Limpar', ['class'=>'btn btn-outline-secondary']) !!}
            <a class="btn btn-outline-danger" href="{{ route('refeicoes') }}">Voltar</a>
        </div>

    {!! Form::close() !!}
@stop