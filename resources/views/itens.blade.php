<!DOCTYPE html>
<html>
<head>
    <title>Itens</title>
</head>
<body>
    <h1>Itens</h1>
    <ul>
        @foreach($itens as $item)
        <li>{{ $item->refeicao }}</li>
        <li>{{ $item->alimento }}</li>
        <li>{{ $item->quantidade }}</li>
        <br>
        @endforeach
    </ul>
</body>
</html>