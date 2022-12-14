<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Relatório de alimentos</title>
</head>

<body>
    <h1 style="text-align:center; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; text-transform: uppercase">Relatório de
        alimentos</h1>
    <hr size="2.25" noshade>

    @forelse ($alimentos as $alimento)
        <div style="text-align: center">
            <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">{{ $alimento->nome }}
            </h3>
            <p><i> {{ $alimento->quantidade }} {{ $alimento->unidade }} -
                    {{ $alimento->referencial }}</i></p>
        </div>

        <table class="table table-striped table-bordered" style="width:100%;">
            <thead style="background-color: grey;">
                <th>Legenda</th>
                <th>Quantidade</th>
                <th>Valor Diário (%)</th>
            </thead>
            <tbody>
                @forelse ($informacoesNutricionais as $informacaoNutricional)
                    @if ($informacaoNutricional->alimento_id == $alimento->id)
                        @foreach ($legendasNutricionais as $legendaNutricional)
                            @if ($informacaoNutricional->legendaNutricional_id == $legendaNutricional->id)
                                <tr style="text-align:center; font-size: 14px">
                                    <td>{{ isset($legendaNutricional->descricao) ? $legendaNutricional->descricao : 'Legenda nutricional não informada' }}
                                    </td>
                                    <td>{{ $informacaoNutricional->quantidade }}
                                        {{ $legendaNutricional->unidade }}</td>
                                    <td>{{ $informacaoNutricional->valorDiario }}%</td>
                                </tr>
                            @endif
                        @endforeach
                    @endif
                @empty
                    <div>
                        <h4 style="font-family: system-ui; text-align: center">Nenhuma informação nutricional cadastrada
                        </h4>
                    </div>
                    <hr size="2.25">
                @endforelse
            </tbody>
        </table>

        <hr size="2.25" noshade>

    @empty
        <div>
            <h4 style="font-family: system-ui; text-align: center">Nenhum alimento cadastrado</h4>
        </div>
        <hr size="2.25">
    @endforelse

</body>

</html>
