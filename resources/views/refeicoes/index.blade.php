@extends('adminlte::page')

@section('content')
    <h1>Refeições</h1>
    <table class="table table-stripe table-bordered table-hover">
        <thead>
            <th>Título</th>
            <th>Descrição</th>
            <th>Data e Hora</th>
            <th>Pessoa</th>
        </thead>
        <tbody>
            @foreach($refeicoes as $refeicao)
                <tr>
                    <td>{{ $refeicao->titulo }}</td>
                    <td>{{ $refeicao->descricao }}</td>
                    <td>{{ Carbon\Carbon::parse($refeicao->dataHora)->format('d/m/Y h:i') }}</td>
                    <td>{{ $refeicao->pessoa }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
    <div>
        <a class="btn btn-outline-primary" href="{{ route('refeicoes.create') }}">Nova Refeição</a>
    </div>
@stop