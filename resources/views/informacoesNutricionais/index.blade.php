@extends('layouts.default')

@section('content')
    @can('administrador')
        <div>
            <br>
            <h1 style="font-family: serif; text-align: center">TABELA NUTRICIONAL</h1>
            <br>
            <h2 style="text-transform: uppercase">{{ $alimento->nome }}</h2>
            <p style="font-size: 20px">Informações nutricionais referentes a {{ $alimento->quantidadePorcao }} {{ $alimento->unidadeMedida }} ou
                {{ $alimento->referencialMedida }}:</p>
        </div>

        <table class="table table-stripe table-bordered table-hover">
            <thead>
                <th>Legenda</th>
                <th>Quantidade</th>
                <th>Valor Diário (%)</th>
                <th>Ações</th>
            </thead>
            <tbody>
                @foreach ($informacoesNutricionais as $informacaoNutricional)
                    <tr>
                        <td>{{ isset($informacaoNutricional->legendaNutricional->descricao) ? $informacaoNutricional->legendaNutricional->descricao : 'Legenda nutricional não informada' }}
                        </td>
                        <td>{{ $informacaoNutricional->quantidade }} {{ isset($informacaoNutricional->legendaNutricional->unidadeMedida) }}</td>
                        <td>{{ $informacaoNutricional->valorDiario }}</td>
                        <td>
                            <a href="{{ route('informacoesNutricionais.edit', ['id' => $informacaoNutricional->id]) }}"
                                class="btn-sm btn-success">Editar</a>
                            <a href="#" onclick="return ConfirmaExclusao({{ $informacaoNutricional->id }})"
                                class="btn-sm btn-danger">Remover</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $informacoesNutricionais->links('pagination::bootstrap-4') }}

        <div>
            <i style="color:#9B111E">% Valores diários com base em uma dieta de 2000kcal. Seus valores diários podem ser maiores
                ou menores dependendo de suas necessidades energéticas.</i>
        </div>
        <br>

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
            <h2>{{ $alimento->nome }}</h2>
            <p>Informações nutricionais referentes a {{ $alimento->quantidadePorcao }} {{ $alimento->unidadeMedida }} ou
                {{ $alimento->referencialMedida }}.</p>
        </div>

        <table class="table table-stripe table-bordered table-hover">
            <thead>
                <th>Legenda</th>
                <th>Quantidade</th>
                <th>Valor Diário (%)</th>
            </thead>
            <tbody>
                @foreach ($informacoesNutricionais as $informacaoNutricional)
                    <tr>
                        <td>{{ isset($informacaoNutricional->legendaNutricional->descricao) ? $informacaoNutricional->legendaNutricional->descricao : 'Legenda nutricional não informada' }}
                        </td>
                        <td>{{ $informacaoNutricional->quantidade }} {{ isset($informacaoNutricional->legendaNutricional->unidadeMedida) }}</td>
                        <td>{{ $informacaoNutricional->valorDiario }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $informacoesNutricionais->links('pagination::bootstrap-4') }}

        <div>
            <i style="color:#9B111E">% Valores diários com base em uma dieta de 2000kcal. Seus valores diários podem ser maiores
                ou menores dependendo de suas necessidades energéticas.</i>
        </div>
        <br>
    @endcan
@stop

@section('table-delete')
    "informacoesNutricionais"
@endsection
