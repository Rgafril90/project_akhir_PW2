@extends('Layout.master')

@section('title', 'Dashboard')

@section('content')

    <div class="card">
        <div class="card-header">

        </div>
        <div class="card-body">
            <script src="https://code.highcharts.com/highcharts.js"></script>
            <script src="https://code.highcharts.com/modules/exporting.js"></script>
            <script src="https://code.highcharts.com/modules/export-data.js"></script>
            <script src="https://code.highcharts.com/modules/accessibility.js"></script>

            <figure class="highcharts-figure">
                <div id="container"></div>
                <p class="highcharts-description">
                </p>
            </figure>

            <style>
                .highcharts-figure .highcharts-data-table table {
                    min-width: 320px;
                    max-width: 800px;
                    margin: 1em auto;
                }

                .highcharts-data-table table {
                    font-family: Verdana, sans-serif;
                    border-collapse: collapse;
                    border: 1px solid #ebebeb;
                    margin: 10px auto;
                    text-align: center;
                    width: 100%;
                    max-width: 500px;
                }

                .highcharts-data-table caption {
                    padding: 1em 0;
                    font-size: 1.2em;
                    color: #555;
                }

                .highcharts-data-table th {
                    font-weight: 600;
                    padding: 0.5em;
                }

                .highcharts-data-table td,
                .highcharts-data-table th,
                .highcharts-data-table caption {
                    padding: 0.5em;
                }

                .highcharts-data-table thead tr,
                .highcharts-data-table tr:nth-child(even) {
                    background: #f8f8f8;
                }

                .highcharts-data-table tr:hover {
                    background: #f1f7ff;
                }

                input[type="number"] {
                    min-width: 50px;
                }
            </style>

            <script>
                Highcharts.chart('container', {
                    chart: {
                        plotBackgroundColor: null,
                        plotBorderWidth: null,
                        plotShadow: false,
                        type: 'pie'
                    },
                    title: {
                        text: 'Grafik Jumlah Stock Roti'
                    },
                    tooltip: {
                        pointFormat: '{series.name}: <b>{point.y}</b>'
                    },
                    accessibility: {
                        point: {
                            valueSuffix: '%'
                        }
                    },
                    plotOptions: {
                        pie: {
                            allowPointSelect: true,
                            cursor: 'pointer',
                            dataLabels: {
                                enabled: true,
                                format: '<b>{point.name}</b>: {point.y}'
                            }
                        }
                    },
                    series: [{
                        name: 'Jumlah Stock Roti',
                        colorByPoint: true,
                        data: [
                            @foreach ($grafik1 as $item)
                                {
                                    name: '{{ $item->nama_roti }} {{ $item->rasa_roti }}',
                                    y: {{ $item->jumlah }}
                                },
                            @endforeach
                        ]
                    }]
                });
            </script>

            <!--Nomor Halaman -->
            <div class="wrap-pagination-info">
                <ul class="page-numbers">
                    <li><span class="page-number-item current">1</span></li>
                    <li class="result-count">Menampilkan Slide Dashboard</li>
                </ul>
            </div>
        </div>

        <div class="card-footer">

        </div>

    </div>
@endsection
