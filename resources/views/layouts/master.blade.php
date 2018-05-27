<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>X-Market</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        @if (isset($user))
            @include('partials.navbars.navbar-logged-in')
        @else
            @include('partials.navbars.navbar')
        @endif        
        <div class="container">
            <div class="page-header">
                <div class="text-right">                
                @yield('header')
            </div>
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