@extends('subtitle')

@section('sub-content')
    <h2>Añadir Nuevo Gato</h2>
    <form action="{{ url('/cats/add') }}" method="post">
        @csrf
        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name" required>
        <br>
        <label for="race">Raza:</label>
        <input type="text" id="race" name="race" required>
        <br>
        <label for="color">Color:</label>
        <input type="text" id="color" name="color" required>
        <br>
        <label for="age">Edad:</label>
        <input type="number" id="age" name="age" required>
        <br>
        <button type="submit">Añadir Gato</button>
    </form>
@endsection
