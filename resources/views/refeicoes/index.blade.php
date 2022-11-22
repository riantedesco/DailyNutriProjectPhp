@extends('layouts.default')

@section('content')
    <div style="text-align: center">
        <br>
        <h1>Refeições</h1>
        <br>
    </div>

    {!! Form::open(['name' => 'form_name', 'route' => 'refeicoes']) !!}
    <div class="sidebar-form">
        <div class="input-group">
            <input type="date" name="dataHora_filtro" class="form-control" style="width: 80% !important;"
                placeholder="Pesquisar pela data...">
            <span class="input-grou-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-default"><i
                        class="fa fa-search"></i></button>
            </span>
        </div>
    </div>
    {!! Form::close() !!}
    <br>

    @foreach ($refeicoes as $refeicao)
        @if ($refeicao->user_id == Auth::user()->id)
            <div style="text-align: center">
                <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">{{ $refeicao->titulo }}
                    - {{ Carbon\Carbon::parse($refeicao->dataHora)->format('d/m/Y h:i') }}</h3>
                <h6><i>{{ $refeicao->descricao }}</i></h6>
                <br>
                <a href="{{ route('itens', ['refeicao_id' => $refeicao->id]) }}" class="btn-sm btn-warning">Ver itens</a>
                <a href="{{ route('refeicoes.edit', ['id' => $refeicao->id]) }}" class="btn-sm btn-success">Editar</a>
                <a href="#" onclick="return ConfirmaExclusao({{ $refeicao->id }})" class="btn-sm btn-danger">Remover</a>
                <br>
            </div>
            <hr size="2">
        @endif
    @endforeach

    <div style="align-content: center">
        {{ $refeicoes->links('pagination::bootstrap-4') }}
    </div>

@stop

@section('table-delete')
    "refeicoes"
@endsection
