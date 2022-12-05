@extends('layouts.default')

@section('content')
    <div>
        <br>
        <h1 style="font-family: serif; text-align: center">MÉDIA NUTRICIONAL POR REFEIÇÃO</h1>
        <br>
    </div>

    <div class="card m-b-20">
        <div class="card-body">
            <h3 class="mt-0 header-title mb-3" style="text-transform: uppercase; text-align: center">{{ $refeicao->titulo }}
            </h3>
            <p style="font-size: 18px; text-align: center">
                <i>{{ Carbon\Carbon::parse($refeicao->dataHora)->format('d/m/Y - H:i') }}</i>
            </p>
            <hr>
            <div class="inbox-wid">
                <div class="inbox-item" style="float: left;">
                    <p style="text-align: center;"><b>Nutrientes consumidos</b></p>
                    <canvas id="myChart" style="height: 350px; width: 600px"></canvas>
                </div>
                <div class="inbox-item" style="float: right;">
                    <p style="text-align: center;"><b>Valores diários totais</b></p>
                    <canvas id="myChart2" style="height: 350px; width: 650px"></canvas>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        const ctx = document.getElementById('myChart');
        const ctx2 = document.getElementById('myChart2');

        new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['Valor Energético', 'Carboidratos', 'Proteínas', 'Gorduras Totais', 'Gorduras Saturadas',
                    'Gorduras Trans', 'Gorduras Instauradas', 'Colesterol',
                    'Fibra Alimentar', 'Sódio', 'Cálcio', 'Ferro', 'Zinco', 'Tiamina', 'Niacina', 'Magnésio',
                    'Cobre', 'Vitamina A', 'Vitamina B3', 'Vitamina B6',
                    'Vitamina B12', 'Vitamina C', 'Vitamina D', 'Vitamina E', 'Vitamina K', 'Manganês',
                ],
                datasets: [{
                    label: 'Quantidade',
                    data: [12, 19, 3, 5, 2, 3, 12, 19, 3, 5, 2, 3, 12, 19, 3, 5, 2, 3, 12, 19, 3, 5, 2, 3,
                        12, 19
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
                    data: [12, 19, 3, 5, 2, 3, 12, 19, 3, 5, 2, 3, 12, 19, 3, 5, 2, 3, 12, 19, 3, 5, 2, 3,
                        12, 19
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
