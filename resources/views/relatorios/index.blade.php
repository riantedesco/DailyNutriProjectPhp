@extends('layouts.default')

@section('content')
    <br>

    <h1 style="font-family: serif; text-align: center"><b>GERAÇÃO DE RELATÓRIOS</b></h1>
    <br>
    <div style="text-align: center; padding: 2%">


        <div>
            <h2 style="text-transform: uppercase">Relatórios de informacoes nutricionais</h2>
            <hr size="2" width="50%">

            <a class="btn btn-outline-dark" href="{{ route('relatorios.informacoesNutricionais') }}" target="_blank">Alimento e tabela
                nutricional</a>
            <br><br>

            <a class="btn btn-outline-dark"
                href="{{ route('relatorios.informacoesNutricionais.filtrarQuantidade') }}" target="_blank">Alimento e tabela nutricional por
                quantidade</a>
            <br><br>
        </div>

        <div>
            <h2 style="text-transform: uppercase">Relatórios de legendas nutricionais</h2>
            <hr size="2" width="50%">

            <a class="btn btn-outline-dark" href="{{ route('relatorios.legendasNutricionais') }}" target="_blank">Legendas nutricionais</a>
            <br><br>

            <a class="btn btn-outline-dark" href="{{ route('relatorios.legendasNutricionais.filtrarDescricao') }}" target="_blank">Legendas nutricionais por descrição</a>
            <br><br>
        </div>

        <div>
            <h2 style="text-transform: uppercase">Relatórios de usuários</h2>
            <hr size="2" width="50%">

            <a class="btn btn-outline-dark" href="{{ route('relatorios.users') }}" target="_blank">Usuários</a>
        </div>
    </div>
@stop

@section('table-delete')
    "informacoesNutricionais"
@endsection
