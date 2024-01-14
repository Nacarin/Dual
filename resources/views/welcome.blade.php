<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title', 'Gatos Laravel')</title>
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    </head>
    <body>
        @include('header')
        <nav>
            <ul>
                <li><a href="/">Inicio</a></li>
                <li><a href="/cats">Gatos</a></li>
            </ul>
        </nav>
        <div>
            @yield('content')
        </div>
        <div>
            <h2>Aqui podemos añadir nuevos Gatuchos</h2>
            @include('add-cat-button')
        </div>
        @include('footer')
    </body>
</html>
