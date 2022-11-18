<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Relatório de alimentos</title>
</head>

<body>
    <h1 style="text-align:center">Alimentos</h1>
    <table class="table table-striped table-bordered" style="width:100%">
        @forelse ($alimentos as $alimento)
            <h3>{{ $alimento->nome }} / {{ $alimento->quantidadePorcao }} {{ $alimento->unidadeMedida }} ({{ $alimento->referencialMedida }})</h3>

            @forelse ($informacoesNutricionais as $informacaoNutricional)
                <thead>
                    <th>Legenda</th>
                    <th>Quantidade</th>
                    <th>Valor Diário</th>
                </thead>
                <tbody>
                    <tr style="text-align:center">
                        <td>{{ isset($informacaoNutricional->legendaNutricional->descricao) ? $informacaoNutricional->legendaNutricional->descricao : 'Legenda nutricional não informada' }}
                        </td>
                        <td>{{ $informacaoNutricional->quantidade }}</td>
                        <td>{{ $informacaoNutricional->valorDiario }}</td>
                    </tr>

                    <br>
                </tbody>
            @empty
                <li style="text-align:center">Nenhuma informação nutricional cadastrada</li>
            @endforelse

        @empty
            <li style="text-align:center">Nenhum alimento cadastrado</li>
        @endforelse
    </table>
</body>

</html>
