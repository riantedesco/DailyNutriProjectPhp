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
        <br>
        @endforeach
    </ul>
</body>
</html>