@extends('adminlte::page')

@section('content')
    <h1>Informações Nutricionais</h1>
    <table class="table table-stripe table-bordered table-hover">
        <thead>
            <th>Alimento</th>
            <th>Valor Energético</th>
            <th>Carboidratos</th>
            <th>Proteínas</th>
            <th>Gorduras Totais</th>
            <th>Gorduras Saturadas</th>
            <th>Gorduras Trans</th>
            <th>Gorduras Instauradas</th>
            <th>Colesterol</th>
            <th>Fibra Alimentar</th>
            <th>Sódio</th>
            <th>Cálcio</th>
            <th>Ferro</th>
            <th>Zinco</th>
            <th>Vitamina A</th>
            <th>Vitamina B</th>
            <th>Vitamina C</th>
            <th>Vitamina K</th>
            <th>Vitamina D</th>
            <th>Ações</th>
        </thead>
        <tbody>
            @foreach($informacoesNutricionais as $informacaoNutricional)
                <tr>
                    <td>{{ $informacaoNutricional->alimento }}</td>
                    <td>{{ $informacaoNutricional->valorEnergetico }}</td>
                    <td>{{ $informacaoNutricional->carboidratos }}</td>
                    <td>{{ $informacaoNutricional->proteinas }}</td>
                    <td>{{ $informacaoNutricional->gordurasTotais }}</td>
                    <td>{{ $informacaoNutricional->gordurasSaturadas }}</td>
                    <td>{{ $informacaoNutricional->gordurasTrans }}</td>
                    <td>{{ $informacaoNutricional->gordurasInstauradas }}</td>
                    <td>{{ $informacaoNutricional->colesterol }}</td>
                    <td>{{ $informacaoNutricional->fibraAlimentar }}</td>
                    <td>{{ $informacaoNutricional->sodio }}</td>
                    <td>{{ $informacaoNutricional->calcio }}</td>
                    <td>{{ $informacaoNutricional->ferro }}</td>
                    <td>{{ $informacaoNutricional->zinco }}</td>
                    <td>{{ $informacaoNutricional->vitaminaA }}</td>
                    <td>{{ $informacaoNutricional->vitaminaB }}</td>
                    <td>{{ $informacaoNutricional->vitaminaC }}</td>
                    <td>{{ $informacaoNutricional->vitaminaK }}</td>
                    <td>{{ $informacaoNutricional->vitaminaD }}</td>
                    <td>
                        <a href="{{ route('informacoesNutricionais.edit', ['id'=>$informacaoNutricional->id]) }}" class="btn-sm btn-success">Editar</a>
                        <a href="{{ route('informacoesNutricionais.destroy', ['id'=>$informacaoNutricional->id]) }}" class="btn-sm btn-danger">Remover</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div>
        <a class="btn btn-outline-primary" href="{{ route('informacoesNutricionais.create') }}">Nova Informação Nutricional</a>
    </div>
@stop