@extends('layouts.default')

@section('content')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">

    <h1 style="padding: 15px; text-align: center">Bem Vindo, {{ Auth::user()->name }}!</h1>
    <hr size="2">
    <div>
        <h4 style="font-family: system-ui; text-align: center"><b>DASHBOARD</b></h4>
    </div>
    <hr size="2">
    <br>

    @can('administrador')
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-6">
                        <div class="small-box bg-secondary">
                            <div class="inner">
                                <h2>{{ $users->count() }}</h2>
                                <p>Usuários registrados no sistema</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-android-people"></i>
                            </div>
                            {{-- <p class="small-box-footer"><br></p> --}}
                            <a href="{{ route('relatorios.users') }}" target="_blank" class="small-box-footer">Ver Relatório de Usuários <i
                                class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-6 col-6">
                        <div class="small-box bg-light">
                            <div class="inner">
                                <h2>{{ $legendasNutricionais->count() }}</h2>
                                <p>Legendas nutricionais disponíveis</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-ios-list"></i>
                            </div>
                            <a href="{{ route('legendasNutricionais') }}" class="small-box-footer">Ver Legendas Nutricionais <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-6 col-6">
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h2>{{ $alimentos->count() }}</h2>
                                <p>Alimentos cadastrados no sistema</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-ios-nutrition"></i>
                            </div>
                            <a href="{{ route('alimentos') }}" class="small-box-footer">Ver Alimentos Cadastrados <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-6 col-6">
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h2>{{ $refeicoesDiarias->count() }}</h2>
                                <p>Refeições de hoje</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-ios-pint"></i>
                            </div>
                            <a href="{{ route('graficos.graficosDia') }}" class="small-box-footer">Ir Para Gráficos do Dia <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-6 col-6">
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h2>{{ $refeicoesSemanais->count() }}</h2>
                                <p>Refeições da última semana</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-android-calendar"></i>
                            </div>
                            <a href="{{ route('graficos.graficosSemana') }}" class="small-box-footer">Ir Para Gráficos da Semana <i
                                class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-6 col-6">
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h2>{{ $refeicoesMensais->count() }}</h2>
                                <p>Refeições do último mês</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-ios-calendar"></i>
                            </div>
                            <a href="{{ route('graficos.graficosMes') }}" class="small-box-footer">Ir Para Gráficos do Mês <i
                                class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
        </section>
    @endcan

    @can('usuario')
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-6">
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h2>{{ $alimentos->count() }}</h2>
                                <p>Alimentos cadastrados no sistema</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-ios-nutrition"></i>
                            </div>
                            <a href="{{ route('alimentos') }}" class="small-box-footer">Ver Alimentos Cadastrados <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-6 col-6">
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h2>{{ $refeicoesDiarias->count() }}</h2>
                                <p>Refeições de hoje</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-ios-pint"></i>
                            </div>
                            <a href="{{ route('graficos.graficosDia') }}" class="small-box-footer">Ir Para Gráficos do Dia <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-6 col-6">
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h2>{{ $refeicoesSemanais->count() }}</h2>
                                <p>Refeições da última semana</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-android-calendar"></i>
                            </div>
                            <a href="{{ route('graficos.graficosSemana') }}" class="small-box-footer">Ir Para Gráficos da Semana <i
                                class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-6 col-6">
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h2>{{ $refeicoesMensais->count() }}</h2>
                                <p>Refeições do último mês</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-ios-calendar"></i>
                            </div>
                            <a href="{{ route('graficos.graficosMes') }}" class="small-box-footer">Ir Para Gráficos do Mês <i
                                class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>

                <div style="text-align: center">
                    <br>
                    <a class="btn btn-outline-success" href="{{ route('refeicoes.create', []) }}" style="font-size: 24px">Cadastre Sua
                        Refeição!</a>
                </div>
        </section>
    @endcan
@endsection
