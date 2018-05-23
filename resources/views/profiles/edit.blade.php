{!! Form::model($profile, ['url' => '/users/'.$profile->user_name, 'method' => 'put']) !!}
    @include('partials.forms.profile')
{!! Form::close() !!}

{{--<style>--}}
    {{--body {--}}
        {{--padding-top: 70px;--}}
        {{--/* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */--}}
    {{--}--}}

    {{--.othertop{margin-top:10px;}--}}
{{--</style>--}}

{{--<div class="container">--}}
    {{--<div class="row">--}}
        {{--<div class="col-md-10 ">--}}
            {{--<form class="form-horizontal">--}}
                {{--<fieldset>--}}

                    {{--<!-- Form Name -->--}}
                    {{--<legend><strong>Edit Profile</strong></legend>--}}

                    {{--<!-- Text input-->--}}
                    {{--<div class="form-group">--}}
                        {{--<label class="col-md-4 control-label" for="Username">Username</label>--}}
                        {{--<div class="col-md-4">--}}
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
                        {{--<div class="col-md-4">--}}
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
                        {{--<div class="col-md-4">--}}
                            {{--<input id="photo" name="photo" class="input-file" type="file">--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<!-- Text input-->--}}
                    {{--<div class="form-group">--}}
                        {{--<label class="col-md-4 control-label" for="Date Of Birth">Date Of Birth</label>--}}
                        {{--<div class="col-md-4">--}}
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
                        {{--<div class="col-md-4">--}}
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
                        {{--<div class="col-md-4">--}}
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
                        {{--<div class="col-md-4">--}}
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
                        {{--<div class="col-md-4">--}}
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
                        {{--<div class="col-md-4">--}}
                            {{--<textarea class="form-control" rows="10"  id="about-me" name="about-me" placeholder="About Me"></textarea>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="form-group">--}}
                        {{--<label class="col-md-4 control-label" ></label>--}}
                        {{--<div class="col-md-4">--}}
                            {{--<a href="#" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span> Submit</a>--}}
                            {{--<a href="#" class="btn btn-danger" value=""><span class="glyphicon glyphicon-remove-sign"></span> Clear</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</fieldset>--}}
            {{--</form>--}}
        {{--</div>--}}

        {{--<div class="col-md-2 hidden-xs">--}}
            {{--<img src="http://websamplenow.com/30/userprofile/images/avatar.jpg" class="img-responsive img-thumbnail ">--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
{{--<!-- jQuery Version 1.11.1 -->--}}
{{--<script src="js/jquery.js"></script>--}}

{{--<!-- Bootstrap Core JavaScript -->--}}
{{--<script src="js/bootstrap.min.js"></script>--}}