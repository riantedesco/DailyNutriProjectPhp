@extends('adminlte::page')

@section('content')
    <h3>Nova Pessoa</h3>

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['url'=>'pessoas/store']) !!}

        <div class="form-group">
            {!! Form::label('nome', 'Nome:') !!}
            {!! Form::text('nome', null, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('cpf', 'Cpf:') !!}
            {!! Form::text('cpf', null, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('dataNascimento', 'Data de Nascimento:') !!}
            {!! Form::date('dataNascimento', null, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('genero', 'Gênero:') !!}
            {!! Form::select('genero',
                             array( 'Masculino'=>'Masculino',
                                    'Feminino'=>'Feminino'),
                             null, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('peso', 'Peso:') !!}
            {!! Form::text('peso', null, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('altura', 'Altura:') !!}
            {!! Form::text('altura', null, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('tipoCadastro', 'Tipo de Cadastro:') !!}
            {!! Form::select('tipoCadastro',
                             array( 'Usuario'=>'Usuário',
                                    'Administrador'=>'Administrador'),
                             'Usuario', ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('usuario', 'Usuário:') !!}
            {!! Form::text('usuario', null, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('senha', 'Senha:') !!}
            {!! Form::text('senha', null, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Criar Pessoa', ['class'=>'btn btn-primary']) !!}
            {!! Form::reset('Limpar', ['class'=>'btn btn-default']) !!}
        </div>

    {!! Form::close() !!}
@stop