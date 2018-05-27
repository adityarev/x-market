<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Furbook</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-bootstrap/0.5pre/assets/css/bootstrap.min.css">
    </head>
    <body>
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