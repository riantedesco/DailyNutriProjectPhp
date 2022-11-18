<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Relatório de legendas nutricionais</title>
</head>

<body>
    <h1 style="text-align:center">Legendas Nutricionais</h1>
    <table class="table table-striped table-bordered" style="width:100%">
        <thead>
            <th>Descrição</th>
            <th>Unidade de Medida</th>
        </thead>
        <tbody>
            @forelse ($legendasNutricionais as $legendaNutricional)
                <tr style="text-align:center">
                    <td>{{ $legendaNutricional->descricao }}</td>
                    <td>{{ $legendaNutricional->unidadeMedida }}</td>
                </tr>
            @empty
                <li style="text-align:center">Nenhuma Legenda Nutricional Cadastrado.</li>
            @endforelse
        </tbody>
    </table>
</body>

</html>
