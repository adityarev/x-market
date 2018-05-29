<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>X-Market</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
        <script src="{{ asset('js/bootstrap-select.min.js')}}"></script>
    </head>
    <body>
        @if (Auth::check())
            @include('partials.navbars.navbar-logged-in')
        @else
            @include('partials.navbars.navbar')
        @endif        
        <div class="container">            
            @if (Session::has('message'))
                <div class="alert alert-success">
                    {{ Session::get('message') }}
                </div>
            @endif            
            @if (Session::has('error'))
                <div class="alert alert-warning">
                    {{ Session::get('error') }}
                </div>
            @endif
            @if (Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif
            @yield('content')
        </div>
    </body>
</html>