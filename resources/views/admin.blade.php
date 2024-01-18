<!DOCTYPE html>
<html lang="es">
    <head>
        @include('head')
        <script type="text/javascript" charset="utf8" src="{{ asset('js/jQuery/3.7.1/jquery.min.js') }}"></script>
        <link rel="stylesheet" type="text/css" href="{{ asset('DataTables-1.13.8/css/datatables.min.css') }}">
        <script type="text/javascript" charset="utf8" src="{{ asset('DataTables-1.13.8/js/datatables.min.js') }}"></script>
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.1/chart.min.js"></script> -->
        <script src="https://cdn.jsdelivr.net/npm/chart.js/dist/Chart.bundle.min.js"></script>
    </head>
    <body>
        @include('header')
        <nav>
            <ul>
                <li><a href="/">Inicio</a></li>
                <li><a href="/cats">Gatos</a></li>
                <li><a href="/catsImage">Imagen</a></li>
                <li><a href="/admin">Administrador</a></li>
            </ul>
        </nav>
        <div>
            <table id="id" class="display">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Consumption (kWh)</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
        <canvas id="myChart"></canvas>
        </div>
    
        <!-- @push('scripts')
                <script type="text/javascript" src="{{ asset('js/tabla.js') }}"></script>
        @endpush -->
    
        <script type="text/javascript">
            $(document).ready(function() {
                $('#id').DataTable({
                    "ajax": "/electricity-consumption-data",
                    "columns": [
                        { "data": "date" },
                        { "data": "consumption_kwh" }
                    ]
                })
            });
        </script>  
        <script>
                const labels = ['Label 1', 'Label 2', 'Label 3', 'Label 4', 'Label 5', 'Label 6', 'Label 7'];               
                new Chart(document.getElementById('myChart'), {
                    type: 'bar',
                    data: {
                        labels: labels,
                        datasets: [{
                            label: 'My First Dataset',
                            data: [65, 59, 80, 81, 56, 55, 40],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(255, 159, 64, 0.2)',
                                'rgba(255, 205, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(201, 203, 207, 0.2)'
                            ],
                            borderColor: [
                                'rgb(255, 99, 132)',
                                'rgb(255, 159, 64)',
                                'rgb(255, 205, 86)',
                                'rgb(75, 192, 192)',
                                'rgb(54, 162, 235)',
                                'rgb(153, 102, 255)',
                                'rgb(201, 203, 207)'
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    },
                });           
        </script>
        @include('footer')
    </body>
</html>
