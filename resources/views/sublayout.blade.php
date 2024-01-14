@extends('welcome')

@section('content')
    <div class="sublayout-container">
        <div class="sublayout-header">
            <h2>@yield('sub-title')</h2>
            
        </div>
        <div class="sublayout-content">
            @yield('sub-content')
            
        </div>
    </div>
@endsection

