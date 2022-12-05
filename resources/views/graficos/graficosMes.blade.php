@extends('layouts.default')

@section('content')
    <br>

    <div class="card m-b-20">
        <div class="card-body">
            <h3 class="mt-0 header-title mb-3" style="text-transform: uppercase; text-align: center">Média nutricional mensal
            </h3>
            <p style="font-size: 18px; text-align: center">
                <i>{{ Carbon\Carbon::parse($trintaDias)->format('d/m/Y') }} até {{ Carbon\Carbon::parse($dataHoje)->format('d/m/Y') }}</i>
            </p>
            <hr>

            @if ($refeicoesMensais->isEmpty())
                <br>
                <div>
                    <h4 style="font-family: system-ui; text-align: center">Nenhuma refeição cadastrada no último mês.</h4>
                </div>
                <br>
            @else
                <div class="inbox-wid">
                    <div class="inbox-item" style="float: left;">
                        <p style="text-align: center;"><b>Nutrientes consumidos</b></p>
                        <p style="text-align: center; font-size: 15px;"><i>Valor energético: {{ $valorEnergetico }}kcal</i>
                        </p>
                        <canvas id="chartPie" style="height: 350px; width: 600px"></canvas>
                    </div>
                    <div class="inbox-item" style="float: right;">
                        <p style="text-align: center;"><b>Valores diários totais</b></p>
                        <p style="text-align: center; font-size: 15px;"><i style="color:#9B111E">% Valores diários com base em uma dieta de 2000kcal.</i></p>
                        <canvas id="chartBar" style="height: 350px; width: 650px"></canvas>
                    </div>
                </div>
            @endif
        </div>
    </div>

    <div>
        <a class="btn btn-outline-danger" href="{{ route('refeicoes') }}">Ir para refeições</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        const ctx = document.getElementById('chartPie');
        const ctx2 = document.getElementById('chartBar');

        new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['Carboidratos', 'Proteínas', 'Gorduras Totais', 'Gorduras Saturadas',
                    'Gorduras Trans', 'Gorduras Instauradas', 'Colesterol',
                    'Fibra Alimentar', 'Sódio', 'Cálcio', 'Ferro', 'Zinco', 'Tiamina', 'Niacina', 'Magnésio',
                    'Cobre', 'Vitamina A', 'Vitamina B3', 'Vitamina B6',
                    'Vitamina B12', 'Vitamina C', 'Vitamina D', 'Vitamina E', 'Vitamina K', 'Manganês',
                ],
                datasets: [{
                    label: 'Quantidade (g)',
                    data: [ @foreach ($dataInfNutricional as $data) {{ $data }}, @endforeach
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: false,
                plugins: {
                    legend: {
                        position: 'right',
                    },
                }
            }
        });

        new Chart(ctx2, {
            type: 'bar',
            data: {
                labels: ['Valor Energético', 'Carboidratos', 'Proteínas', 'Gorduras Totais', 'Gorduras Saturadas',
                    'Gorduras Trans', 'Gorduras Instauradas', 'Colesterol',
                    'Fibra Alimentar', 'Sódio', 'Cálcio', 'Ferro', 'Zinco', 'Tiamina', 'Niacina', 'Magnésio',
                    'Cobre', 'Vitamina A', 'Vitamina B3', 'Vitamina B6',
                    'Vitamina B12', 'Vitamina C', 'Vitamina D', 'Vitamina E', 'Vitamina K', 'Manganês',
                ],
                datasets: [{
                    label: 'Valor diário (%)',
                    data: [ @foreach ($dataValorDiario as $data) {{ $data }}, @endforeach
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: false,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                }
            }
        });
    </script>
@stop
