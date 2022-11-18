@extends('adminlte::page')

@section('content')
    <div>
        <br>
        <h3>Nova Refeição</h3>
        <br>
    </div>

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['route' => 'refeicoes.store']) !!}

    <div class="form-group">
        {!! Form::label('titulo', 'Título:') !!}
        {!! Form::text('titulo', null, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('descricao', 'Descrição:') !!}
        {!! Form::textarea('descricao', null, ['class' => 'form-control', 'required', 'rows' => '3']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('dataHora', 'Data e Hora:') !!}
        {!! Form::datetimelocal('dataHora', null, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('user_id', 'Usuário:') !!}
        {!! Form::select(
            'user_id',
            \App\Models\User::orderBy('name')->pluck('name', 'id')->toArray(),
            null,
            ['class' => 'form-control', 'required'],
        ) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Criar Refeição', ['class' => 'btn btn-outline-success']) !!}
        {!! Form::reset('Limpar', ['class' => 'btn btn-outline-secondary']) !!}
        <a class="btn btn-outline-danger" href="{{ route('refeicoes') }}">Voltar para refeições</a>
    </div>

    {!! Form::close() !!}
@stop
