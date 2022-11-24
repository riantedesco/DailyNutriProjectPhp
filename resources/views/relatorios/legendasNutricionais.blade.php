<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Relatório de legendas nutricionais</title>
</head>

<body>
    <h1 style="text-align:center; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Relatório de
        legendas nutricionais</h1>
    <hr size="2.25" noshade>

    <table class="table table-striped table-bordered" style="width:100%">
        <thead style="background-color: grey;">
            <th>Descrição</th>
            <th>Unidade de Medida</th>
        </thead>
        <tbody>
            @forelse ($legendasNutricionais as $legendaNutricional)
                <tr style="text-align:center; font-size: 14px">
                    <td>{{ $legendaNutricional->descricao }}</td>
                    <td>{{ $legendaNutricional->unidadeMedida }}</td>
                </tr>
            @empty
                <div>
                    <h4 style="font-family: system-ui; text-align: center">Nenhuma legenda nutricional cadastrada</h4>
                </div>
                <hr size="2.25">
            @endforelse
        </tbody>
    </table>
</body>

</html>
