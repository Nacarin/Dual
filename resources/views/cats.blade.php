@extends('sublayout')

@section('sub-title', 'Gatuchos')

@section('sub-content')
    <p>¡Bienvenido a la sección de gatos!</p>
    @if ($cats->isEmpty())
        <p>No hay gatos para mostrar.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Raza</th>
                    <th>Color</th>
                    <th>Edad</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cats as $cat)
                    <tr>
                        <td>{{ $cat->name }}</td>
                        <td>{{ $cat->race }}</td>
                        <td>{{ $cat->color }}</td>
                        <td>{{ $cat->age }} años</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    @include('add-cat-button')
@endsection
