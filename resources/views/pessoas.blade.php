<!DOCTYPE html>
<html>
<head>
    <title>Pessoas</title>
</head>
<body>
    <h1>Pessoas</h1>
    <ul>
        @foreach($pessoas as $pessoa)
        <li>{{ $pessoa->nome }}</li>
        <li>{{ $pessoa->cpf }}</li>
        <li>{{ $pessoa->dataNascimento }}</li>
        <li>{{ $pessoa->genero }}</li>
        <li>{{ $pessoa->peso }}</li>
        <li>{{ $pessoa->altura }}</li>
        <li>{{ $pessoa->tipoCadastro }}</li>
        <li>{{ $pessoa->usuario }}</li>
        <li>{{ $pessoa->senha }}</li>
        <br>
        @endforeach
    </ul>
</body>
</html>