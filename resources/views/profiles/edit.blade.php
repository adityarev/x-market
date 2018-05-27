{!! Form::model($profile, ['url' => '/users/'.$profile->user_name, 'method' => 'put']) !!}
    @include('partials.forms.profile')
{!! Form::close() !!}

{{--<style>--}}
    {{--.user-row {--}}
        {{--margin-bottom: 14px;--}}
    {{--}--}}

    {{--.user-row:last-child {--}}
        {{--margin-bottom: 0;--}}
    {{--}--}}

    {{--.dropdown-user {--}}
        {{--margin: 13px 0;--}}
        {{--padding: 5px;--}}
        {{--height: 100%;--}}
    {{--}--}}

    {{--.dropdown-user:hover {--}}
        {{--cursor: pointer;--}}
    {{--}--}}

    {{--.table-user-information > tbody > tr {--}}
        {{--border-top: 1px solid rgb(221, 221, 221);--}}
    {{--}--}}

    {{--.table-user-information > tbody > tr:first-child {--}}
        {{--border-top: 0;--}}
    {{--}--}}

    {{--.table-user-information > tbody > tr > td {--}}
        {{--border-top: 0;--}}
    {{--}--}}
    {{--.toppad {--}}
        {{--margin-top:20px;--}}
    {{--}--}}
{{--</style>--}}

{{--<div class="container">--}}
    {{--<div class="row">--}}
        {{--<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >--}}
            {{--<div class="panel panel-default">--}}
                {{--<div class="panel-heading">--}}
                    {{--<h3 class="panel-title"><strong>Edit Profile</strong></h3>--}}
                {{--</div>--}}
                {{--<div class="panel-body">--}}
                    {{--<div class="col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3" style="margin-bottom: 15px;">--}}
                        {{--<img alt="User Pic" src="https://i.scdn.co/image/6a38b5c1fabb83ba5db7ff3dfe99da2150af26e3" class="img-circle img-responsive">--}}
                    {{--</div>--}}

                    {{--<div class="row">--}}
                        {{--<div class="col-md-12">--}}
                            {{--<form class="form-horizontal">--}}
                                {{--<fieldset>--}}
                                    {{--<!-- Text input-->--}}
                                    {{--<div class="form-group">--}}
                                        {{--<label class="col-md-4 control-label" for="Username">Username</label>--}}
                                        {{--<div class="col-md-6">--}}
                                            {{--<div class="input-group">--}}
                                                {{--<div class="input-group-addon">--}}
                                                    {{--<i class="fa fa-user"></i>--}}
                                                {{--</div>--}}
                                                {{--<input id="username" name="username" type="text" placeholder="Username" class="form-control input-md">--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}

                                    {{--<!-- Text input-->--}}
                                    {{--<div class="form-group">--}}
                                        {{--<label class="col-md-4 control-label" for="Name (Full name)">Name (Full name)</label>--}}
                                        {{--<div class="col-md-6">--}}
                                            {{--<div class="input-group">--}}
                                                {{--<div class="input-group-addon">--}}
                                                    {{--<i class="fa fa-credit-card"></i>--}}
                                                {{--</div>--}}
                                                {{--<input id="full-name" name="full-name" type="text" placeholder="Name (Full name)" class="form-control input-md">--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}

                                    {{--<!-- File Button -->--}}
                                    {{--<div class="form-group">--}}
                                        {{--<label class="col-md-4 control-label" for="Upload photo">Upload photo</label>--}}
                                        {{--<div class="col-md-6">--}}
                                            {{--<input id="photo" name="photo" class="input-file" type="file">--}}
                                        {{--</div>--}}
                                    {{--</div>--}}

                                    {{--<!-- Text input-->--}}
                                    {{--<div class="form-group">--}}
                                        {{--<label class="col-md-4 control-label" for="Date Of Birth">Date Of Birth</label>--}}
                                        {{--<div class="col-md-6">--}}
                                            {{--<div class="input-group">--}}
                                                {{--<div class="input-group-addon">--}}
                                                    {{--<i class="fa fa-birthday-cake"></i>--}}

                                                {{--</div>--}}
                                                {{--<input id="birth-date" name="birth-date" type="text" placeholder="Date Of Birth" class="form-control input-md">--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}

                                    {{--<!-- Multiple Radios (inline) -->--}}
                                    {{--<div class="form-group">--}}
                                        {{--<label class="col-md-4 control-label" for="Gender">Gender</label>--}}
                                        {{--<div class="col-md-6">--}}
                                            {{--<label class="radio-inline" for="Gender-0">--}}
                                                {{--<input type="radio" name="Gender" id="Gender-0" value="1" checked="checked">--}}
                                                {{--Male--}}
                                            {{--</label>--}}
                                            {{--<label class="radio-inline" for="Gender-1">--}}
                                                {{--<input type="radio" name="Gender" id="Gender-1" value="2">--}}
                                                {{--Female--}}
                                            {{--</label>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}

                                    {{--<!-- Text input-->--}}
                                    {{--<div class="form-group">--}}
                                        {{--<label class="col-md-4 control-label col-xs-12" for="Address">Address</label>--}}
                                        {{--<div class="col-md-6">--}}
                                            {{--<div class="input-group">--}}
                                                {{--<div class="input-group-addon">--}}
                                                    {{--<i class="fa fa-home"></i>--}}
                                                {{--</div>--}}
                                                {{--<input id="address" name="address" type="text" placeholder="Address" class="form-control input-md">--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}

                                    {{--<!-- Text input-->--}}
                                    {{--<div class="form-group">--}}
                                        {{--<label class="col-md-4 control-label" for="Phone number ">Phone number </label>--}}
                                        {{--<div class="col-md-6">--}}
                                            {{--<div class="input-group">--}}
                                                {{--<div class="input-group-addon">--}}
                                                    {{--<i class="fa fa-phone"></i>--}}
                                                {{--</div>--}}
                                                {{--<input id="phone-number " name="phone-number " type="text" placeholder="Phone number " class="form-control input-md">--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}

                                    {{--<!-- Text input-->--}}
                                    {{--<div class="form-group">--}}
                                        {{--<label class="col-md-4 control-label" for="Email Address">Email Address</label>--}}
                                        {{--<div class="col-md-6">--}}
                                            {{--<div class="input-group">--}}
                                                {{--<div class="input-group-addon">--}}
                                                    {{--<i class="fa fa-envelope-o"></i>--}}
                                                {{--</div>--}}
                                                {{--<input id="Email Address" name="Email Address" type="text" placeholder="Email Address" class="form-control input-md">--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}

                                    {{--<!-- Textarea -->--}}
                                    {{--<div class="form-group">--}}
                                        {{--<label class="col-md-4 control-label" for="About Me">About Me</label>--}}
                                        {{--<div class="col-md-6">--}}
                                            {{--<textarea class="form-control" rows="10"  id="about-me" name="about-me" placeholder="About Me"></textarea>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}

                                    {{--<div class="form-group">--}}
                                        {{--<label class="col-md-4 control-label" ></label>--}}
                                        {{--<div class="col-md-6">--}}
                                            {{--<a href="#" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span> Submit</a>--}}
                                            {{--<a href="#" class="btn btn-danger" value=""><span class="glyphicon glyphicon-remove-sign"></span> Clear</a>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</fieldset>--}}
                            {{--</form>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}

{{--<script>--}}
    {{--$(document).ready(function() {--}}
        {{--var panels = $('.user-infos');--}}
        {{--var panelsButton = $('.dropdown-user');--}}
        {{--panels.hide();--}}

        {{--//Click dropdown--}}
        {{--panelsButton.click(function() {--}}
            {{--//get data-for attribute--}}
            {{--var dataFor = $(this).attr('data-for');--}}
            {{--var idFor = $(dataFor);--}}

            {{--//current button--}}
            {{--var currentButton = $(this);--}}
            {{--idFor.slideToggle(400, function() {--}}
                {{--//Completed slidetoggle--}}
                {{--if(idFor.is(':visible'))--}}
                {{--{--}}
                    {{--currentButton.html('<i class="glyphicon glyphicon-chevron-up text-muted"></i>');--}}
                {{--}--}}
                {{--else--}}
                {{--{--}}
                    {{--currentButton.html('<i class="glyphicon glyphicon-chevron-down text-muted"></i>');--}}
                {{--}--}}
            {{--})--}}
        {{--});--}}

        {{--$('[data-toggle="tooltip"]').tooltip();--}}

        {{--$('button').click(function(e) {--}}
            {{--e.preventDefault();--}}
        {{--});--}}
    {{--});--}}
{{--</script>--}}