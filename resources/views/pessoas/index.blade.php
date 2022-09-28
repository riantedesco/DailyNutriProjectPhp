@extends('adminlte::page')

@section('content')
    <h1>Pessoas</h1>
    <table class="table table-stripe table-bordered table-hover">
        <thead>
            <th>Nome</th>
            <th>CPF</th>
            <th>Data de Nascimento</th>
            <th>Gênero</th>
            <th>Peso</th>
            <th>Altura</th>
            <th>Tipo de Cadastro</th>
            <th>Usuário</th>
            <th>Senha</th>
        </thead>
        <tbody>
            @foreach($pessoas as $pessoa)
                <tr>
                    <td>{{ $pessoa->nome }}</td>
                    <td>{{ $pessoa->cpf }}</td>
                    <td>{{ $pessoa->dataNascimento }}</td>
                    <td>{{ $pessoa->genero }}</td>
                    <td>{{ $pessoa->peso }}</td>
                    <td>{{ $pessoa->altura }}</td>
                    <td>{{ $pessoa->tipoCadastro }}</td>
                    <td>{{ $pessoa->usuario }}</td>
                    <td>{{ $pessoa->senha }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop