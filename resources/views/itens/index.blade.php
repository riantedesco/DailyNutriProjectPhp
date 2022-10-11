@extends('layouts.default')

@section('content')
    <h1>Itens</h1>
    <table class="table table-stripe table-bordered table-hover">
        <thead>
            <th>Refeição</th>
            <th>Alimento</th>
            <th>Quantidade</th>
            <th>Ações</th>
        </thead>
        <tbody>
            @foreach($itens as $item)
                <tr>
                    <td>{{ $item->refeicao }}</td>
                    <td>{{ $item->alimento }}</td>
                    <td>{{ $item->quantidade }}</td>
                    <td>
                        <a href="{{ route('itens.edit', ['id'=>$item->id]) }}" class="btn-sm btn-success">Editar</a>
                        <a href="#" onclick="return ConfirmaExclusao({{$item->id}})" class="btn-sm btn-danger">Remover</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
    <div>
        <a class="btn btn-outline-primary" href="{{ route('itens.create', []) }}">Novo Item</a>
    </div>
@stop

@section('table-delete')
"itens"
@endsection