<!DOCTYPE html>
<html>
<head>
    <title>Informações Nutricionais</title>
</head>
<body>
    <h1>Informações Nutricionais</h1>
    <ul>
        @foreach($informacoesNutricionais as $informacaoNutricional)
        <li>{{ $informacaoNutricional->alimento }}</li>
        <li>{{ $informacaoNutricional->valorEnergetico }}</li>
        <li>{{ $informacaoNutricional->carboidratos }}</li>
        <li>{{ $informacaoNutricional->proteinas }}</li>
        <li>{{ $informacaoNutricional->gordurasTotais }}</li>
        <li>{{ $informacaoNutricional->gordurasSaturadas }}</li>
        <li>{{ $informacaoNutricional->gordurasTrans }}</li>
        <li>{{ $informacaoNutricional->gordurasInstauradas }}</li>
        <li>{{ $informacaoNutricional->colesterol }}</li>
        <li>{{ $informacaoNutricional->fibraAlimentar }}</li>
        <li>{{ $informacaoNutricional->sodio }}</li>
        <li>{{ $informacaoNutricional->calcio }}</li>
        <li>{{ $informacaoNutricional->ferro }}</li>
        <li>{{ $informacaoNutricional->zinco }}</li>
        <li>{{ $informacaoNutricional->vitaminaA }}</li>
        <li>{{ $informacaoNutricional->vitaminaB }}</li>
        <li>{{ $informacaoNutricional->vitaminaC }}</li>
        <li>{{ $informacaoNutricional->vitaminaK }}</li>
        <li>{{ $informacaoNutricional->vitaminaD }}</li>
        <br>
        @endforeach
    </ul>
</body>
</html>