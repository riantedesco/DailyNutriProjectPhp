@extends('adminlte::page')

@section('content')
    <h1>Alimentos</h1>
    <table class="table table-stripe table-bordered table-hover">
        <thead>
            <th>Nome</th>
            <th>Unidade de Medida</th>
            <th>Quantidade por Porção</th>
        </thead>
        <tbody>
            @foreach($alimentos as $alimento)
                <tr>
                    <td>{{ $alimento->nome }}</td>
                    <td>{{ $alimento->unidadeMedida }}</td>
                    <td>{{ $alimento->quantidadePorcao }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div>
        <a class="btn btn-outline-primary" href="{{ route('alimentos.criar') }}">Novo Alimento</a>
    </div>
@stop