@extends('layouts.master')
@section('content')
<style>
    .toppad {
        margin-top:20px;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-xs-offset-0 col-sm-offset-0 col-md-offset-1 col-lg-offset-1 toppad" >
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><strong>SubCategory Name</strong></h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 toppad" >
                            <div class="panel panel-default">
                                <a href="#">
                                    <div class="panel-body">
                                        <div class="col-md-12 col-lg-12" id="item" style="padding:0px; opacity: 0.4">
                                            <img alt="300x200" style="width: 100%" src="http://placehold.it/200x150">
                                        </div>
                                        <div class="col-md-12 col-lg-12" style="padding:0px">
                                            <h4>Sabun</h4>
                                            <span class="fa fa-dollar" style="margin-right: 5px"></span>12
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 toppad" >
                            <div class="panel panel-default">
                                <a href="#">
                                    <div class="panel-body">
                                        <div class="col-md-12 col-lg-12" id="item" style="padding:0px; opacity: 0.4">
                                            <img alt="300x200" style="width: 100%" src="http://placehold.it/200x150">
                                        </div>
                                        <div class="col-md-12 col-lg-12" style="padding:0px">
                                            <h4>Sabun</h4>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 toppad" >
                            <div class="panel panel-default">
                                <a href="#">
                                    <div class="panel-body">
                                        <div class="col-md-12 col-lg-12" id="item" style="padding:0px; opacity: 0.4">
                                            <img alt="300x200" style="width: 100%" src="http://placehold.it/200x150">
                                        </div>
                                        <div class="col-md-12 col-lg-12" style="padding:0px">
                                            <h4>Sabun</h4>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $(".panel .panel-default").mouseenter(function () {
            $(this).removeClass('panel-default', {duration: 125}).addClass('panel-primary', {duration: 125});

            $('#item').animate({
                opacity: "1.0"
            }, 250);
        }).mouseleave(function () {
            $('#item').animate({
                opacity: "0.4"
            }, 250);

            $(this).removeClass('panel-primary', {duration: 125}).addClass('panel-default', {duration: 125});
        });
    });
</script>
@stop