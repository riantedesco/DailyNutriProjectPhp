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
        <br>
        @endforeach
    </ul>
</body>
</html>