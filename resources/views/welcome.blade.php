<!DOCTYPE html>
<html lang="es">
    <head>
        @include('head')
    </head>
    <body>
        @include('header')
        <nav>
            <ul>
                <li><a href="/">Inicio</a></li>
                <li><a href="/cats">Gatos</a></li>
                <li><a href="/catsImage">Imagen</a></li>
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
