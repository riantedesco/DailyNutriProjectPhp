@extends('layouts.default')

@section('content')
    <h1>Alimentos</h1>
    <table class="table table-stripe table-bordered table-hover">
        <thead>
            <th>Nome</th>
            <th>Unidade de Medida</th>
            <th>Quantidade por Porção</th>
            <th>Ações</th>
        </thead>
        <tbody>
            @foreach($alimentos as $alimento)
                <tr>
                    <td>{{ $alimento->nome }}</td>
                    <td>{{ $alimento->unidadeMedida }}</td>
                    <td>{{ $alimento->quantidadePorcao }}</td>
                    <td>
                        <a href="{{ route('alimentos.edit', ['id'=>$alimento->id]) }}" class="btn-sm btn-success">Editar</a>
                        <a href="#" onclick="return ConfirmaExclusao({{$alimento->id}})" class="btn-sm btn-danger">Remover</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $alimentos->links("pagination::bootstrap-4") }}

    <div>
        <a class="btn btn-outline-primary" href="{{ route('alimentos.create', []) }}">Novo Alimento</a>
    </div>
@stop

@section('table-delete')
"alimentos"
@endsection