<!DOCTYPE html>
<html lang="es">
    <head>
        @include('head')
        <link rel="stylesheet" type="text/css" href="{{ asset('DataTables-1.13.8/css/datatables.min.css') }}">
        <script type="text/javascript" charset="utf8" src="{{ asset('DataTables-1.13.8/js/datatables.min.js') }}"></script>
        <!-- /<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.1/dist/chart.umd.min.js"></script> -->      
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script type="text/javascript" src="{{ asset('js/tabla.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/grafico.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/graficolinea.js') }}"></script>
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
                        <th>FECHA</th>
                        <th>CONSUMO (kWh)</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
        <canvas id="myChart"></canvas>    
        <canvas id="myChartLine"></canvas>         
        @include('footer')
    </body>
</html>
