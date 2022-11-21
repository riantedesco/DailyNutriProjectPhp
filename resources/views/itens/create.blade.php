@extends('adminlte::page')

@section('content')
    <div>
        <br>
        <h3>Novo Item</h3>
        <br>
    </div>

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['route' => 'itens.store']) !!}

    <div>
        <input type="hidden" name="refeicao_id" value="{{$refeicao->id}}">
    </div>

    <div class="form-group">
        {!! Form::label('alimento_id', 'Alimento:') !!}
        {!! Form::select(
            'alimento_id',
            \App\Models\Alimento::orderBy('nome')->pluck('nome', 'id')->toArray(),
            null,
            ['class' => 'form-control', 'required'],
        ) !!}
    </div>

    <div class="form-group">
        {!! Form::label('quantidade', 'Quantidade:') !!}
        {!! Form::number('quantidade', null, ['class' => 'form-control', 'required', 'step' => 'any']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Criar Item', ['class' => 'btn btn-outline-success']) !!}
        {!! Form::reset('Limpar', ['class' => 'btn btn-outline-secondary']) !!}
        <a class="btn btn-outline-danger" href="{{ route('itens', ['refeicao_id' => $refeicao->id]) }}">Voltar</a>
    </div>

    {!! Form::close() !!}
@stop
