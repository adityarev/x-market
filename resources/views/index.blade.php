<!DOCTYPE html>
<html>
<head>
    <title>X-Market</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/index-style.css') }}">
</head>

<body>

<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-main">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/logo/x.png') }}" style="height: 55px;">
            </a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse-main">
            <ul class="nav navbar-nav navbar-right">
                <li><a class="active" href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Testimonials</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>

<div id="home">
    <div class="landing-text">
        <h1>X-MARKET</h1>
        <h3>Meet your dream stuff with your dream price here</h3>
        <a href="#" class="btn btn-default btn-lg">Get Started</a>
    </div>
</div>

<div class="padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img src="{{ asset('images/bootstrap.png') }}">
            </div>
            <div class="col-sm-6 text-center">
                <h2>All About Using Bootstrap</h2>
                <p class="lead">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut posuere mauris sit amet felis ultrices
                    maximus. Nunc ornare dui diam, eget pulvinar nunc vulputate at.
                </p>
                <p class="lead">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut posuere mauris sit amet felis ultrices
                    maximus. Nunc ornare dui diam, eget pulvinar nunc vulputate at.
                </p>
            </div>
        </div>
    </div>
</div>

<div class="padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <h4>Built with Sass</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut posuere mauris sit amet felis ultrices
                    maximus. Nunc ornare dui diam, eget pulvinar nunc vulputate at.
                </p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <img src="{{ asset('images/sass.png') }}" class="img-responsive">
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <h4>And Less</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut posuere mauris sit amet felis ultrices
                    maximus. Nunc ornare dui diam, eget pulvinar nunc vulputate at.
                </p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <img src="{{ asset('images/less.png') }}" class="img-responsive">
            </div>
        </div>
    </div>
</div>

<div id="fixed">
    //
</div>

<div class="padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h2>Here's the cool thing about Bootstrap...</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut posuere mauris sit amet felis ultrices
                    maximus. Nunc ornare dui diam, eget pulvinar nunc vulputate at.
                </p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut posuere mauris sit amet felis ultrices
                    maximus. Nunc ornare dui diam, eget pulvinar nunc vulputate at.
                </p>
            </div>
            <div class="col-sm-6">
                <img src="{{ asset('images/bootstrap.png') }}">
            </div>
        </div>
    </div>
</div>

<footer class="container-fluid text-center">
    <div class="row">
        <div class="col-sm-4">
            <h3>Contact Us</h3>
            <br>
            <h4>@Informatics ITS</h4>
        </div>
        <div class="col-sm-4">
            <h3>Connect</h3>
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-google"></a>
            <a href="#" class="fa fa-linkedin"></a>
            <a href="#" class="fa fa-youtube"></a>
        </div>
        <div class="col-sm-4">
            <img src="{{ asset('images/b.png') }}" class="icon">
        </div>
    </div>
</footer>

</body>
</html>