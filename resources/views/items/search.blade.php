@extends('layouts.master')
@section('content')
    <style>
        .toppad {
            margin-top:20px;
        }
    </style>

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><strong>Item List</strong></h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            @foreach($items as $item)
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 toppad" >
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <div class="col-md-4 col-lg-4" id="{{ $item->id }}" style="padding:0px; opacity: 0.4">                                            
                                            @if($item->item_image != null)
                                                <img alt="User Pic" src="{{ asset('storage/item_images/'.$item->item_image) }}" class="img-responsive">
                                            @else
                                                <img alt="300x200" style="width: 100%" src="http://placehold.it/200x150">
                                            @endif                                                
                                            </div>
                                                    @if(Auth::check() && Auth::user()->username == $item->user->username)
                                                        <a href="{{ url('items/'.$item->user->username.'/'.$item->item_name.'/edit') }}">
                                                    @else
                                                        <a href="{{ url('items/'.$item->user->username.'/'.$item->item_name) }}">
                                                    @endif
                                                        <h4>{{$item->item_name}}</h4>
                                                    </a>                                                
                                                <span class="fa fa-dollar" style="margin-right: 5px"></span>{{ $item->item_price }}
                                            </div>                                            
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="panel-footer" style="overflow: auto">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >                            
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

            @foreach($items as $item)
                $("#delete-btn-{{ $item->id }}").click(function(){
                    console.log('jancok');
                    $("#delete-modal-{{ $item->id }}").modal();
                });
            @endforeach
        });
    </script>
@stop