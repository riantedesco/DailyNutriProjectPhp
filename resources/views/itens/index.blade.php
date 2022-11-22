@extends('layouts.default')

@section('content')
    <div>
        <br>
        <h1 style="font-family: serif; text-align: center">RELAÇÃO DE ITENS</h1>
        <br>
        <h2>{{ $refeicao->titulo }}</h2>
        <p>{{ Carbon\Carbon::parse($refeicao->dataHora)->format('d/m/Y - H:i') }}</p>
    </div>

    <table class="table table-stripe table-bordered table-hover">
        <thead>
            <th>Alimento</th>
            <th>Quantidade</th>
            <th>Ações</th>
        </thead>
        <tbody>
            @foreach ($itens as $item)
                <tr>
                    <td>{{ isset($item->alimento->nome) ? $item->alimento->nome : 'Alimento não informado' }}</td>
                    <td>{{ $item->quantidade }} {{ isset($item->alimento->unidadeMedida) }}</td>
                    <td>
                        <a href="{{ route('itens.edit', ['id' => $item->id ]) }}" class="btn-sm btn-success">Editar</a>
                        <a href="#" onclick="return ConfirmaExclusao({{ $item->id }})" class="btn-sm btn-danger">Remover</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $itens->links('pagination::bootstrap-4') }}

    <div>
        <a class="btn btn-outline-primary" href="{{ route('itens.create', ['refeicao_id' => $refeicao->id]) }}">Novo Item</a>
        <a class="btn btn-outline-danger" href="{{ route('refeicoes') }}">Voltar para refeições</a>
    </div>
@stop

@section('table-delete')
    "itens"
@endsection
