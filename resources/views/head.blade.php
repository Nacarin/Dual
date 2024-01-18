<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>@yield('title', 'Gatos Laravel')</title>
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">

<script src="{{ asset('js/jQuery/3.7.1/jquery.min.js') }}"></script>

@stack('styles')
@stack('scripts')