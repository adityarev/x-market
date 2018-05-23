<style>
    .user-row {
        margin-bottom: 14px;
    }

    .user-row:last-child {
        margin-bottom: 0;
    }

    .dropdown-user {
        margin: 13px 0;
        padding: 5px;
        height: 100%;
    }

    .dropdown-user:hover {
        cursor: pointer;
    }

    .table-user-information > tbody > tr {
        border-top: 1px solid rgb(221, 221, 221);
    }

    .table-user-information > tbody > tr:first-child {
        border-top: 0;
    }

    .table-user-information > tbody > tr > td {
        border-top: 0;
    }
    .toppad {
        margin-top:20px;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Profile (username)</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-3 col-lg-3 " align="center">
                            <img alt="User Pic" src="https://i.scdn.co/image/6a38b5c1fabb83ba5db7ff3dfe99da2150af26e3" class="img-circle img-responsive">
                        </div>

                        <div class=" col-md-9 col-lg-9 ">
                            <table class="table table-user-information">
                                <tbody>
                                <tr>
                                    <td><span class="fa fa-credit-card" style="margin-right: 10px"></span>Name:</td>
                                    <td>Full Name</td>
                                </tr>
                                <tr>
                                    <td><span class="fa fa-birthday-cake" style="margin-right: 10px"></span>Date of Birth</td>
                                    <td>DD/MM/YYYY</td>
                                </tr>
                                <tr>
                                    <td><span class="fa fa-genderless" style="margin-right: 10px"></span>Gender</td>
                                    <td>Male</td>
                                </tr>
                                <tr>
                                    <td><span class="fa fa-home" style="margin-right: 10px"></span>Address</td>
                                    <td>Keputih</td>
                                </tr>
                                <tr>
                                    <td><span class="fa fa-phone" style="margin-right: 10px"></span>Phone Number</td>
                                    <td>555-4567-890</td>
                                </tr>
                                <tr>
                                    <td><span class="fa fa-envelope-o" style="margin-right: 10px"></span>Email</td>
                                    <td>user@mail.com</a></td>
                                </tr>
                                <tr>
                                    <td><span class="fa fa-info-circle" style="margin-right: 10px"></span>About Me</td>
                                    <td>Handsome</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                    <span class="pull-right">
                            <a href="#" data-original-title="Edit" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                            <a data-original-title="Remove" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                        </span>
                </div>

            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        var panels = $('.user-infos');
        var panelsButton = $('.dropdown-user');
        panels.hide();

        //Click dropdown
        panelsButton.click(function() {
            //get data-for attribute
            var dataFor = $(this).attr('data-for');
            var idFor = $(dataFor);

            //current button
            var currentButton = $(this);
            idFor.slideToggle(400, function() {
                //Completed slidetoggle
                if(idFor.is(':visible'))
                {
                    currentButton.html('<i class="glyphicon glyphicon-chevron-up text-muted"></i>');
                }
                else
                {
                    currentButton.html('<i class="glyphicon glyphicon-chevron-down text-muted"></i>');
                }
            })
        });

        $('[data-toggle="tooltip"]').tooltip();

        $('button').click(function(e) {
            e.preventDefault();
        });
    });
</script>