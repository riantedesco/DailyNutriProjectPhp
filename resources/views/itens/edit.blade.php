@extends('adminlte::page')

@section('content')
    @foreach ($alimentos as $alimento)
        @if ($item->alimento_id == $alimento->id)
            <div>
                <br>
                <h2 style="font-family: serif;">Editando item: {{ $alimento->nome }}</h2>
                <hr size="2">
            </div>

            @if ($errors->any())
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            {!! Form::open(['route' => ['itens.update', 'id' => $item->id], 'method' => 'put']) !!}

            <div class="form-group">
                {!! Form::label('quantidade', 'Quantidade:') !!}
                <i style="font-size: 15px">Medida em {{ $alimento->unidadeMedida }}</i>
                {!! Form::number('quantidade', $item->quantidade, ['class' => 'form-control', 'required', 'step' => 'any']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Editar Item', ['class' => 'btn btn-outline-success']) !!}
                {!! Form::reset('Limpar', ['class' => 'btn btn-outline-secondary']) !!}
                <a class="btn btn-outline-danger"
                    href="{{ route('itens', ['refeicao_id' => $item->refeicao_id]) }}">Voltar</a>
            </div>

            {!! Form::close() !!}
        @endif
    @endforeach
@stop
