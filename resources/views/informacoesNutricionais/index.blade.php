@extends('layouts.default')

@section('content')
    <div>
        <br>
        <h1>Informações Nutricionais</h1>
        <br>
    </div>

    <table class="table table-stripe table-bordered table-hover">
        <thead>
            <th>Alimento</th>
            <th>Legenda</th>
            <th>Quantidade</th>
            <th>Valor Diário (%)</th>
            <th>Ações</th>
        </thead>
        <tbody>
            @foreach ($informacoesNutricionais as $informacaoNutricional)
                <tr>
                    <td>{{ isset($informacaoNutricional->alimento->nome) ? $informacaoNutricional->alimento->nome : 'Alimento não informado' }}
                    </td>
                    <td>{{ isset($informacaoNutricional->legendaNutricional->descricao) ? $informacaoNutricional->legendaNutricional->descricao : 'Legenda nutricional não informada' }}
                    </td>
                    <td>{{ $informacaoNutricional->quantidade }}</td>
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
        <a class="btn btn-outline-primary" href="{{ route('informacoesNutricionais.create', []) }}">Nova Informação
            Nutricional</a>
    </div>
@stop

@section('table-delete')
    "informacoesNutricionais"
@endsection
