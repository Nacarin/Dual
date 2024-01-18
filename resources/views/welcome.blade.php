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
                <li><a href="/admin">Administrador</a></li>
            </ul>
        </nav>
        <div>
            @yield('content')
        </div>
        <div>
            @if(request()->is('/'))
                <form action="{{ url('/store-number') }}" method="post">
                    @csrf
                    <label for="number">Ingrese un número:</label>
                    <input type="number" id="number" name="number" required>
                    <button type="submit">Guardar en caché</button>
                </form>
            @endif
        </div>
        <div>
            <h2>Aqui podemos añadir nuevos Gatuchos</h2>
            @include('add-cat-button')
        </div>
        @include('footer')
    </body>
</html>
