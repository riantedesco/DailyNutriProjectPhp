<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Relatório de alimentos</title>
</head>

<body>
    <h1 style="text-align:center; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Relatório de
        alimentos</h1>
    <hr size="2.25" noshade>

    @forelse ($alimentos as $alimento)
        <div style="text-align: center">
            <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">{{ $alimento->nome }}
            </h3>
            <p><i> {{ $alimento->quantidadePorcao }} {{ $alimento->unidadeMedida }} -
                    {{ $alimento->referencialMedida }}</i></p>
        </div>
        <table class="table table-striped table-bordered" style="width:100%;">
            <thead style="background-color: grey;">
                <th>Legenda</th>
                <th>Quantidade</th>
                <th>Valor Diário (%)</th>
            </thead>
            <tbody>
                @forelse ($informacoesNutricionais as $informacaoNutricional)
                    @if($informacaoNutricional->alimento_id == $alimento->id)
                        <tr style="text-align:center; font-size: 14px">
                            <td>{{ isset($informacaoNutricional->legendaNutricional->descricao) ? $informacaoNutricional->legendaNutricional->descricao : 'Legenda nutricional não informada' }}
                            </td>
                            <td>{{ $informacaoNutricional->quantidade }}
                                {{ isset($informacaoNutricional->legendaNutricional->unidadeMedida) }}</td>
                            <td>{{ $informacaoNutricional->valorDiario }}</td>
                        </tr>
                    @endif
                @empty
                    <li style="text-align:center">Nenhuma informação nutricional cadastrada</li>
                @endforelse
            </tbody>
        </table>
        <hr size="2.25" noshade>
    @empty
        <li style="text-align:center">Nenhum alimento cadastrado</li>
    @endforelse

</body>

</html>
