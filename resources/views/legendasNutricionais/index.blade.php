@extends('layouts.default')

@section('content')
    <h1>Legendas Nutricionais</h1>
    <table class="table table-stripe table-bordered table-hover">
        <thead>
            <th>Descrição</th>
            <th>Unidade de Medida</th>
            <th>Ações</th>
        </thead>
        <tbody>
            @foreach($legendasNutricionais as $legendaNutricional)
                <tr>
                    <td>{{ $legendaNutricional->descricao }}</td>
                    <td>{{ $legendaNutricional->unidadeMedida }}</td>
                    <td>
                        <a href="{{ route('legendasNutricionais.edit', ['id'=>$legendaNutricional->id]) }}" class="btn-sm btn-success">Editar</a>
                        <a href="#" onclick="return ConfirmaExclusao({{$legendaNutricional->id}})" class="btn-sm btn-danger">Remover</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $legendasNutricionais->links("pagination::bootstrap-4") }}

    <div>
        <a class="btn btn-outline-primary" href="{{ route('legendasNutricionais.create', []) }}">Nova Legenda Nutricional</a>
    </div>
@stop

@section('table-delete')
"legendasNutricionais"
@endsection