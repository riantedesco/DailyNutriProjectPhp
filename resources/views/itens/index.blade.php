@extends('layouts.default')

@section('content')
    <div>
        <br>
        <h1>Itens</h1>
        <br>
    </div>
    
    <table class="table table-stripe table-bordered table-hover">
        <thead>
            <th>Refeição</th>
            <th>Alimento</th>
            <th>Quantidade</th>
            <th>Ações</th>
        </thead>
        <tbody>
            @foreach ($itens as $item)
                <tr>
                    <td>{{ isset($item->alimento->nome) ? $item->alimento->nome : 'Alimento não informado' }}</td>
                    <td>{{ isset($item->refeicao->titulo) ? $item->refeicao->titulo : 'Refeição não informada' }}</td>
                    <td>{{ $item->quantidade }}</td>
                    <td>
                        <a href="{{ route('itens.edit', ['id' => $item->id]) }}" class="btn-sm btn-success">Editar</a>
                        <a href="#" onclick="return ConfirmaExclusao({{ $item->id }})"
                            class="btn-sm btn-danger">Remover</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $itens->links('pagination::bootstrap-4') }}

    <div>
        <a class="btn btn-outline-primary" href="{{ route('itens.create', []) }}">Novo Item</a>
    </div>
@stop

@section('table-delete')
    "itens"
@endsection
