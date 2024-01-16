@extends('subtitle')

@section('sub-content')
    <p>¡Visualiza al increible Gato Disociado!</p>
    <div id="contenidoAdicional">
        <img src="{{ asset('images/gatoDisociativo.jpg') }}" alt="El pobre está disociado">
    </div>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/cat.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('js/catsImageScript.js') }}"></script>
@endpush
