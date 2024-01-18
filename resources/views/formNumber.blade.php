@extends('welcome')

@section('numbercache')
    <div class="sublayout-container">
        <form action="{{ url('/store-number') }}" method="post">
            @csrf
            <label for="number">Ingrese un número:</label>
            <input type="number" id="number" name="number" required>
            <button type="submit">Guardar en caché</button>
        </form>
    </div>
@endsection