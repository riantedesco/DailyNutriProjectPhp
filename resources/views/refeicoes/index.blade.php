@extends('layouts.default')

@section('content')
    <div>
        <br>
        <h1>Refeições</h1>
        <br>
    </div>

        {{-- <thead>
            <th>Descrição</th>
            <th>Data e Hora</th>
            <th>Ações</th>
        </thead>
        <tbody> --}}
        @foreach ($refeicoes as $refeicao)
            @if ($refeicao->user_id == Auth::user()->id)
                <div>
                    <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">{{ $refeicao->titulo }} - {{ Carbon\Carbon::parse($refeicao->dataHora)->format('d/m/Y h:i') }}</h3>
                    <h6><i>{{ $refeicao->descricao }}</i></h6>
                    <a href="{{ route('itens', ['refeicao_id' => $refeicao->id]) }}" class="btn-sm btn-warning">Ver itens</a>
                    <a href="{{ route('refeicoes.edit', ['id' => $refeicao->id]) }}" class="btn-sm btn-success">Editar</a>
                    <a href="#" onclick="return ConfirmaExclusao({{ $refeicao->id }})"
                        class="btn-sm btn-danger">Remover</a>
                    <br><br>
                    {{-- <tr>
                    <td>{{ $refeicao->descricao }}</td>
                    <td>{{ Carbon\Carbon::parse($refeicao->dataHora)->format('d/m/Y h:i') }}</td>
                    <td>
                        <a href="{{ route('itens', ['refeicao_id' => $refeicao->id]) }}" class="btn-sm btn-warning">Ver itens</a>
                        <a href="{{ route('refeicoes.edit', ['id' => $refeicao->id]) }}" class="btn-sm btn-success">Editar</a>
                        <a href="#" onclick="return ConfirmaExclusao({{ $refeicao->id }})"
                            class="btn-sm btn-danger">Remover</a>
                    </td>
                </tr> --}}
                </div>
            @endif
        @endforeach
        {{-- </tbody> --}}
    <br>
    {{ $refeicoes->links('pagination::bootstrap-4') }}
@stop

@section('table-delete')
    "refeicoes"
@endsection
