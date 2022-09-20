<!DOCTYPE html>
<html>
<head>
    <title>Alimentos</title>
</head>
<body>
    <h1>Alimentos</h1>
    <ul>
        @foreach($alimentos as $alimento)
        <li>{{ $alimento->nome }}</li>
        <li>{{ $alimento->unidadeMedida }}</li>
        <li>{{ $alimento->quantidadePorcao }}</li>
        <br>
        @endforeach
    </ul>
</body>
</html>