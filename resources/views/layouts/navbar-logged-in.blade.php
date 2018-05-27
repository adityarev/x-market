<style>
    .dropdown-submenu {
        position: relative;
    }

    .dropdown-submenu .dropdown-menu {
        top: 0;
        left: 100%;
        margin-top: -1px;
    }

    .list-notificacao{
        min-width: 400px;
        background: #ffffff;
    }

    .list-notificacao li{
        border-bottom : 1px #d8d8d8 solid;
        text-align    : justify;
        padding       : 5px 10px 5px 10px;
        cursor: pointer;
        font-size: 12px;
    }

    .list-notificacao li:hover{
        background: #f1eeee;
    }

    .list-notificacao li:hover .exclusaoNotificacao{
        display: block;
    }

    .list-notificacao li  p{
        color: black;
        width: 305px;
    }

    .list-notificacao li .exclusaoNotificacao{
        width: 25px;
        min-height: 40px;
        position: absolute;
        right: 0;
        display: none;
    }

    .list-notificacao .media img{
        width: 40px;
        height: 40px;
        float:left;
        margin-right: 10px;
    }

    .badgeAlert {
        display: inline-block;
        min-width: 10px;
        padding: 3px 7px;
        font-size: 12px;
        font-weight: 700;
        color: #fff;
        line-height: 1;
        vertical-align: baseline;
        white-space: nowrap;
        text-align: center;
        background-color: #d9534f;
        border-radius: 10px;
        position: absolute;
        margin-top: -10px;
        margin-left: -10px
    }

    .profile-pic {
        position: relative;
        top: -5px;
        float: left;
        left: -5px;
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
                            <a class="test" tabindex="-1" href="#">Category 1 <span class="glyphicon glyphicon-menu-right"></span></a>
                            <ul class="dropdown-menu">
                                <li><a tabindex="-1" href="#">Category 1-1</a></li>
                                <li><a tabindex="-1" href="#">Category 1-2</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a class="test" tabindex="-1" href="#">Category 2 <span class="glyphicon glyphicon-menu-right"></span></span></a>
                            <ul class="dropdown-menu">
                                <li><a tabindex="-1" href="#">Category 2-1</a></li>
                                <li><a tabindex="-1" href="#">Category 2-2</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a class="test" tabindex="-1" href="#">Category 3 <span class="glyphicon glyphicon-menu-right"></span></span></a>
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
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <span class="glyphicon glyphicon-bell alertNotificacao"></span>
                        <span class='badgeAlert'>2</span>
                        <span class="caret"></span>
                    </a>
                    <ul class="list-notificacao dropdown-menu">
                        <li id='item_notification_1'>
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img alt="64x64" class="media-object" data-src="holder.js/64x64" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIHZpZXdCb3g9IjAgMCA2NCA2NCIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+PCEtLQpTb3VyY2UgVVJMOiBob2xkZXIuanMvNjR4NjQKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNWZhMWJmZmI3MCB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE1ZmExYmZmYjcwIj48cmVjdCB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSIxMy40Njg3NSIgeT0iMzYuNSI+NjR4NjQ8L3RleHQ+PC9nPjwvZz48L3N2Zz4=" data-holder-rendered="true">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <div class='exclusaoNotificacao'>
                                        <button class='btn btn-danger btn-xs button_exclusao' id='1' onclick='excluirItemNotificacao(this)'>x</button>
                                    </div>
                                    <h4 class="media-heading">ITEM 1</h4>
                                    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                </div>
                            </div>
                        </li>
                        <li id='item_notification_2'>
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img alt="64x64" class="media-object" data-src="holder.js/64x64" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIHZpZXdCb3g9IjAgMCA2NCA2NCIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+PCEtLQpTb3VyY2UgVVJMOiBob2xkZXIuanMvNjR4NjQKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNWZhMWJmZmI3MCB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE1ZmExYmZmYjcwIj48cmVjdCB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSIxMy40Njg3NSIgeT0iMzYuNSI+NjR4NjQ8L3RleHQ+PC9nPjwvZz48L3N2Zz4=" data-holder-rendered="true">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <div class='exclusaoNotificacao'>
                                        <button class='btn btn-danger btn-xs' id='2' onclick='excluirItemNotificacao(this)'>x</button>
                                    </div>
                                    <h4 class="media-heading">ITEM 2</h4>
                                    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <span class="glyphicon glyphicon-user" style="margin-right: 5px;"></span>Halo, User
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Profile</a></li>
                        <li><a href="#">Purchases</a></li>
                        <li><a href="#">Sales</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script>
    $(document).ready(function(){
        var temp = $('.dropdown-submenu a.test');

        $("#signup-btn").click(function(){
            $("#signup-modal").modal();
        });

        $("#login-btn").click(function(){
            $("#login-modal").modal();
        });

        $('.dropdown-submenu a.test').on("mouseenter", function(e){
            $(this).next('ul').show();
            if (temp.get(0) !== $(this).get(0)) {
                temp.next('ul').hide();
            }
            e.stopPropagation();
            e.preventDefault();
        });

        $('.dropdown-submenu a.test').on("mouseleave", function(e){
            temp = $(this);
        });
    });

    function excluirItemNotificacao(e){
        $('#item_notification_'+e.id).remove()
    }
</script>