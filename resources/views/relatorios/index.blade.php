@extends('layouts.default')

@section('content')
    <br>

    <h1 style="font-family: serif; text-align: center"><b>GERAÇÃO DE RELATÓRIOS</b></h1>
    <br>
    <div style="text-align: center; padding: 5%">


        <div>
            <h2 style="text-transform: uppercase">Relatórios de informacoes nutricionais</h2>
            <hr size="2" width="50%">

            <a class="btn btn-outline-dark" href="{{ route('relatorios.informacoesNutricionais') }}">Alimento e tabela
                nutricional</a>
            <br><br>

            <a class="btn btn-outline-dark"
                href="{{ route('relatorios.informacoesNutricionais.filtrarQuantidade') }}">Alimento e tabela nutricional por
                quantidade</a>
            <br><br>
        </div>

        <div>
            <h2 style="text-transform: uppercase">Relatórios de legendas nutricionais</h2>
            <hr size="2" width="50%">

            <a class="btn btn-outline-dark" href="{{ route('relatorios.legendasNutricionais') }}">Legendas nutricionais</a>
            <br><br>

            <a class="btn btn-outline-dark" href="{{ route('relatorios.legendasNutricionais.filtrarDescricao') }}">Legendas nutricionais por descrição</a>
            <br><br>
        </div>
    </div>
@stop

@section('table-delete')
    "informacoesNutricionais"
@endsection
