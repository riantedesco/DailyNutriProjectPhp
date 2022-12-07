<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Relatório de usuários</title>
</head>

<body>
    <h1
        style="text-align:center; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; text-transform: uppercase">
        Relatório de
        usuários</h1>

    <hr size="2.25" noshade>
    <div style="text-align: center">
        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; text-transform: uppercase">Administradores</h3>
    </div>
    <table class="table table-striped table-bordered" style="width:100%;">
        <thead style="background-color: grey;">
            <th>Nome</th>
            <th>Data de Nascimento</th>
            <th>Gênero</th>
            <th>E-mail</th>
        </thead>
        <tbody>
            @foreach ($users as $user)
                @if ($user->tipoCadastro == 'Administrador')
                    @if ($user->id == Auth::user()->id)
                        <tr style="text-align:center; font-size: 14px; color: green">
                            <td>{{ $user->name }}</td>
                            <td>{{ Carbon\Carbon::parse($user->dataNascimento)->format('d/m/Y') }}</td>
                            <td>{{ $user->genero }}</td>
                            <td>{{ $user->email }}</td>
                        </tr>
                    @else
                    <tr style="text-align:center; font-size: 14px;">
                        <td>{{ $user->name }}</td>
                        <td>{{ Carbon\Carbon::parse($user->dataNascimento)->format('d/m/Y') }}</td>
                        <td>{{ $user->genero }}</td>
                        <td>{{ $user->email }}</td>
                    </tr>
                    @endif
                @endif
            @endforeach
        </tbody>
    </table>

    <hr size="2.25" noshade>
    <div style="text-align: center">
        <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; text-transform: uppercase">Usuários comuns</h3>
    </div>
    <table class="table table-striped table-bordered" style="width:100%;">
        <thead style="background-color: grey;">
            <th>Nome</th>
            <th>Data de Nascimento</th>
            <th>Gênero</th>
            <th>E-mail</th>
        </thead>
        <tbody>
            @foreach ($users as $user)
                @if ($user->tipoCadastro == 'Usuario')
                    <tr style="text-align:center; font-size: 14px;">
                        <td>{{ $user->name }}</td>
                        <td>{{ Carbon\Carbon::parse($user->dataNascimento)->format('d/m/Y') }}</td>
                        <td>{{ $user->genero }}</td>
                        <td>{{ $user->email }}</td>
                    </tr>
                @endif
            @endforeach
        </tbody>
    </table>
</body>

</html>
