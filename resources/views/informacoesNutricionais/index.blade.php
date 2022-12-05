@extends('layouts.default')

@section('content')
    @can('administrador')
        <div>
            <br>
            <h1 style="font-family: serif; text-align: center">TABELA NUTRICIONAL</h1>
            <br>
            <h2 style="text-transform: uppercase">{{ $alimento->nome }}</h2>
            <p style="font-size: 20px">Informações nutricionais referentes a {{ $alimento->quantidade }}
                {{ $alimento->unidade }} ou
                {{ $alimento->referencial }}:</p>
        </div>

        @if ($informacoesNutricionais->isEmpty())
            <hr size="2">
            <div>
                <h4 style="font-family: system-ui; text-align: center">Nenhuma informação nutricional cadastrada.</h4>
            </div>
            <hr size="2">
            <br>
        @else
            <table class="table table-stripe table-bordered table-hover">
                <thead>
                    <th>Legenda</th>
                    <th>Quantidade</th>
                    <th>Valor Diário (%)</th>
                    <th>Ações</th>
                </thead>
                <tbody>
                    @foreach ($informacoesNutricionais as $informacaoNutricional)
                        @foreach ($legendasNutricionais as $legendaNutricional)
                            @if ($informacaoNutricional->legendaNutricional_id == $legendaNutricional->id)
                                <tr>
                                    <td>{{ isset($legendaNutricional->descricao) ? $legendaNutricional->descricao : 'Legenda nutricional não informada' }}
                                    </td>
                                    <td>{{ $informacaoNutricional->quantidade }}
                                        {{ $legendaNutricional->unidade }}</td>
                                    <td>{{ $informacaoNutricional->valorDiario }}%</td>
                                    <td>
                                        <a href="{{ route('informacoesNutricionais.edit', ['id' => $informacaoNutricional->id]) }}"
                                            class="btn-sm btn-success">Editar</a>
                                        <a href="#" onclick="return ConfirmaExclusao({{ $informacaoNutricional->id }})"
                                            class="btn-sm btn-danger">Remover</a>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    @endforeach
                </tbody>
            </table>

            <div>
                <i style="color:#9B111E">% Valores diários com base em uma dieta de 2000kcal. Seus valores diários podem ser
                    maiores
                    ou menores dependendo de suas necessidades energéticas.</i>
            </div>
            <br>
        @endif

        {{ $informacoesNutricionais->links('pagination::bootstrap-4') }}

        <div>
            <a class="btn btn-outline-primary"
                href="{{ route('informacoesNutricionais.create', ['alimento_id' => $alimento->id]) }}">Nova Informação
                Nutricional</a>
            <a class="btn btn-outline-danger" href="{{ route('alimentos') }}">Voltar para alimentos</a>
        </div>
    @endcan

    @can('usuario')
        <div>
            <br>
            <h1 style="font-family: serif; text-align: center">TABELA NUTRICIONAL</h1>
            <br>
            <h2 style="text-transform: uppercase">{{ $alimento->nome }}</h2>
            <p style="font-size: 20px">Informações nutricionais referentes a {{ $alimento->quantidade }}
                {{ $alimento->unidade }} ou
                {{ $alimento->referencial }}:</p>
        </div>

        @if ($informacoesNutricionais->isEmpty())
            <hr size="2">
            <div>
                <h4 style="font-family: system-ui; text-align: center">Nenhuma informação nutricional cadastrada.</h4>
            </div>
            <hr size="2">
            <br>
        @else
            <table class="table table-stripe table-bordered table-hover">
                <thead>
                    <th>Legenda</th>
                    <th>Quantidade</th>
                    <th>Valor Diário (%)</th>
                </thead>
                <tbody>
                    @foreach ($informacoesNutricionais as $informacaoNutricional)
                        @foreach ($legendasNutricionais as $legendaNutricional)
                            @if ($informacaoNutricional->legendaNutricional_id == $legendaNutricional->id)
                                <tr>
                                    <td>{{ isset($legendaNutricional->descricao) ? $legendaNutricional->descricao : 'Legenda nutricional não informada' }}
                                    </td>
                                    <td>{{ $informacaoNutricional->quantidade }}
                                        {{ $legendaNutricional->unidade }}</td>
                                    <td>{{ $informacaoNutricional->valorDiario }}%</td>
                                </tr>
                            @endif
                        @endforeach
                    @endforeach
                </tbody>
            </table>

            <div>
                <i style="color:#9B111E">% Valores diários com base em uma dieta de 2000kcal. Seus valores diários podem ser
                    maiores
                    ou menores dependendo de suas necessidades energéticas.</i>
            </div>
            <br>
        @endif

        {{ $informacoesNutricionais->links('pagination::bootstrap-4') }}

        <div>
            <a class="btn btn-outline-danger" href="{{ route('alimentos') }}">Voltar para alimentos</a>
        </div>
    @endcan
@stop

@section('table-delete')
    "informacoesNutricionais"
@endsection
