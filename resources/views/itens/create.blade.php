@extends('adminlte::page')

@section('content')
    <div>
        <br>
        <h2 style="font-family: serif;">Novo item</h2>
        <hr size="2">
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
            \App\Models\Alimento::select(DB::raw("CONCAT(nome, ' - ', unidade, ' (cada ', quantidade, ' ', unidade, ' equivalem a ', referencial, ')') AS name"), 'id')->pluck('name', 'id')->toArray(),
            null,
            ['class' => 'form-control', 'required', 'onchange' => 'document.getElementById("quantidade").innerHTML = "Informe de acordo com a unidade de medida, levando em consideração o referencial do alimento selecionado!"'],
        ) !!}
    </div>

    <div class="form-group">
        {!! Form::label('quantidade', 'Quantidade:') !!}
        <i style="font-size: 15px; color: brown" id="quantidade"></i>
        {!! Form::number('quantidade', null, ['class' => 'form-control', 'required', 'step' => 'any']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Criar Item', ['class' => 'btn btn-outline-success']) !!}
        {!! Form::reset('Limpar', ['class' => 'btn btn-outline-secondary']) !!}
        <a class="btn btn-outline-danger" href="{{ route('itens', ['refeicao_id' => $refeicao->id]) }}">Voltar</a>
    </div>

    {!! Form::close() !!}
@stop
