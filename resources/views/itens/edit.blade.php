@extends('adminlte::page')

@section('content')
    <h3>Editando Item</h3>

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['route'=> ['itens.update', 'id'=>$item->id], 'method'=>'put']) !!}

    {{-- <div>
        <input type="hidden" name="refeicao_id" value="{{$item->refeicao_id}}">
    </div> --}}

    <div class="form-group">
        {!! Form::label('alimento_id', 'Alimento:') !!}
        {!! Form::select('alimento_id', \App\Models\Alimento::orderBy('nome')->pluck('nome', 'id')->toArray(), $item->alimento_id, ['class'=>'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('quantidade', 'Quantidade:') !!}
        {!! Form::number('quantidade', $item->quantidade, ['class'=>'form-control', 'required', 'step' => 'any']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Editar Item', ['class'=>'btn btn-outline-success']) !!}
        {!! Form::reset('Limpar', ['class'=>'btn btn-outline-secondary']) !!}
        <a class="btn btn-outline-danger" href="{{ route('itens', ['refeicao_id' => $item->refeicao_id]) }}">Voltar</a>
    </div>

    {!! Form::close() !!}
    
    {{-- {!! Form::open(['route'=> ['itens.update', 'id'=>$item->id, 'refeicao_id'=>$item->refeicao_id], 'method'=>'put']) !!}

        <div>
            <input type="hidden" name="refeicao_id" value="{{$item->refeicao_id}}">
        </div>

        <div class="form-group">
            {!! Form::label('alimento_id', 'Alimento:') !!}
            {!! Form::select('alimento_id', \App\Models\Alimento::orderBy('nome')->pluck('nome', 'id')->toArray(), $item->alimento_id, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('quantidade', 'Quantidade:') !!}
            {!! Form::number('quantidade', $item->quantidade, ['class'=>'form-control', 'required', 'step' => 'any']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Editar Item', ['class'=>'btn btn-outline-success']) !!}
            {!! Form::reset('Limpar', ['class'=>'btn btn-outline-secondary']) !!}
            <a class="btn btn-outline-danger" href="{{ route('itens', ['refeicao_id' => $item->refeicao_id]) }}">Voltar</a>
        </div>

    {!! Form::close() !!} --}}
@stop