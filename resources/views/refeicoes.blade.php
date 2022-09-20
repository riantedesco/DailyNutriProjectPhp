<!DOCTYPE html>
<html>
<head>
    <title>Refeições</title>
</head>
<body>
    <h1>Refeições</h1>
    <ul>
        @foreach($refeicoes as $refeicao)
        <li>{{ $refeicao->titulo }}</li>
        <li>{{ $refeicao->descricao }}</li>
        <li>{{ $refeicao->dataHora }}</li>
        <li>{{ $refeicao->pessoa }}</li>
        <br>
        @endforeach
    </ul>
</body>
</html>