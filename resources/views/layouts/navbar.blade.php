<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<style>
    .dropdown-submenu {
        position: relative;
    }

    .dropdown-submenu .dropdown-menu {
        top: 0;
        left: 100%;
        margin-top: -1px;
    }
</style>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">X-Market</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Categories<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-submenu">
                            <a class="category" tabindex="-1" href="#">Category 1 <span class="glyphicon glyphicon-menu-right"></span></a>
                            <ul class="dropdown-menu">
                                <li><a tabindex="-1" href="#">Category 1-1</a></li>
                                <li><a tabindex="-1" href="#">Category 1-2</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a class="category" tabindex="-1" href="#">Category 2 <span class="glyphicon glyphicon-menu-right"></span></span></a>
                            <ul class="dropdown-menu">
                                <li><a tabindex="-1" href="#">Category 2-1</a></li>
                                <li><a tabindex="-1" href="#">Category 2-2</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a class="category" tabindex="-1" href="#">Category 3 <span class="glyphicon glyphicon-menu-right"></span></span></a>
                            <ul class="dropdown-menu">
                                <li><a tabindex="-1" href="#">Category 3-1</a></li>
                                <li><a tabindex="-1" href="#">Category 3-2</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
            <form class="navbar-form navbar-left" action="/action_page.php">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search" name="search">
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </div>
                </div>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#" id="signup-btn"><span class="glyphicon glyphicon-plus-sign"></span> Sign Up</a></li>
                <!-- Signup Modal -->
                <div class="modal fade" id="signup-modal" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header" style="padding:35px 50px;">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4><span class="glyphicon glyphicon-plus-sign"></span> Sign Up</h4>
                            </div>
                            <div class="modal-body" style="padding:40px 50px;">
                                <form role="form">
                                    <div class="form-group">
                                        <label for="username"><span class="glyphicon glyphicon-user"></span> Username</label>
                                        <input type="text" class="form-control" id="email" name="email" placeholder="Enter username">
                                    </div>
                                    <div class="form-group">
                                        <label for="username"><span class="glyphicon glyphicon-envelope"></span> Email</label>
                                        <input type="text" class="form-control" id="email" name="email" placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <label for="password"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
                                    </div>
                                    <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-plus"></span> Sign Up</button>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                                <p>Already have an account? <a href="#">Login</a></p>
                            </div>
                        </div>

                    </div>
                </div>

                <li><a href="#" id="login-btn"><span class="glyphicon glyphicon-lock"></span> Login</a></li>
                <!-- Login Modal -->
                <div class="modal fade" id="login-modal" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header" style="padding:35px 50px;">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
                            </div>
                            <div class="modal-body" style="padding:40px 50px;">
                                <form role="form">
                                    <div class="form-group">
                                        <label for="username"><span class="glyphicon glyphicon-envelope"></span> Email</label>
                                        <input type="text" class="form-control" id="email" name="email" placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <label for="password"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
                                    </div>
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="" checked>Remember me</label>
                                    </div>
                                    <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                                <p>Not a member? <a href="#">Sign Up</a></p>
                                <p>Forgot <a href="#">Password?</a></p>
                            </div>
                        </div>

                    </div>
                </div>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <h3>Collapsible Navbar</h3>
    <p>In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).
    <p>Only when the button is clicked, the navigation bar will be displayed.</p>
</div>

<script>
    $(document).ready(function(){
        var temp;

        $("#signup-btn").click(function(){
            $("#signup-modal").modal();
        });

        $("#login-btn").click(function(){
            $("#login-modal").modal();
        });

        $('.dropdown-submenu a.category').on("mouseenter", function(e){
            $(this).next('ul').show();
            if (temp.get(0) !== $(this).get(0)) {
                temp.next('ul').hide();
            }
            e.stopPropagation();
            e.preventDefault();
        });

        $('.dropdown-submenu a.category').on("mouseleave", function(e){
            temp = $(this);
        });
    });
</script>

</body>
</html>