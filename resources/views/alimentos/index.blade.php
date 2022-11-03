@extends('layouts.default')

@section('content')
    <h1>Alimentos</h1>

    {!! Form::open(['name'=>'form_name', 'route'=>'alimentos']) !!}
        <div class="sidebar-form">
            <div class="input-group">
                <input type="text" name="desc_filtro" class="form-control" style="width: 80% !important;" placeholder="Pesquisar...">
                <span class="input-grou-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-default"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </div>
    {!! Form::close() !!}
    <br>
    <table class="table table-stripe table-bordered table-hover">
        <thead>
            <th>Nome</th>
            <th>Quantidade por Porção</th>
            <th>Unidade de Medida</th>
            <th>Referencial da Medida</th>
            <th>Ações</th>
        </thead>
        <tbody>
            @foreach($alimentos as $alimento)
                <tr>
                    <td>{{ $alimento->nome }}</td>
                    <td>{{ $alimento->quantidadePorcao }}</td>
                    <td>{{ $alimento->unidadeMedida }}</td>
                    <td>{{ $alimento->referencialMedida }}</td>
                    <td>
                        <a href="{{ route('alimentos.edit', ['id'=>$alimento->id]) }}" class="btn-sm btn-success">Editar</a>
                        <a href="#" onclick="return ConfirmaExclusao({{$alimento->id}})" class="btn-sm btn-danger">Remover</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $alimentos->links("pagination::bootstrap-4") }}
@stop

@section('table-delete')
"alimentos"
@endsection