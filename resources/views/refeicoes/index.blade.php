@extends('layouts.default')

@section('content')
    <h1>Refeições</h1>
    <table class="table table-stripe table-bordered table-hover">
        <thead>
            <th>Título</th>
            <th>Descrição</th>
            <th>Data e Hora</th>
            <th>User</th>
            <th>Ações</th>
        </thead>
        <tbody>
            @foreach($refeicoes as $refeicao)
                <tr>
                    <td>{{ $refeicao->titulo }}</td>
                    <td>{{ $refeicao->descricao }}</td>
                    <td>{{ Carbon\Carbon::parse($refeicao->dataHora)->format('d/m/Y h:i') }}</td>
                    <td>{{ isset($refeicao->user->name) ? $refeicao->user->name :"User não informado" }}</td>
                    <td>
                        <a href="{{ route('refeicoes.edit', ['id'=>$refeicao->id]) }}" class="btn-sm btn-success">Editar</a>
                        <a href="#" onclick="return ConfirmaExclusao({{$refeicao->id}})" class="btn-sm btn-danger">Remover</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $refeicoes->links("pagination::bootstrap-4") }}
@stop

@section('table-delete')
"refeicoes"
@endsection