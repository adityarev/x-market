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
                    <h3 class="panel-title"><strong>{{ $subCategory->sub_category_name }}</strong></h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        @foreach($subCategory->items as $item)
                            <a href="{{ url('items/'.$item->user->username.'/'.$item->item_name) }}">
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 toppad" >
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <div class="col-md-12 col-lg-12" id="{{ $item->id }}" style="padding:0px; opacity: 0.4">
                                        @if($item->item_image != null)
                                            <img alt="User Pic" style="height: 150px; width: 100%" src="{{ asset('storage/item_images/'.$item->item_image) }}" class="img-responsive">
                                        @else
                                            <img alt="300x200" style="height: 150px; width: 100%" src="http://placehold.it/200x150">
                                        @endif
                                        </div>
                                        <div class="col-md-12 col-lg-12" style="padding:0px">
                                            <a href="{{url('items/'.$item->user->username.'/'.$item->item_name)}}">
                                                <h4>{{$item->item_name}}</h4>
                                            </a>
                                            <span class="fa fa-dollar" style="margin-right: 5px"></span>{{ $item->item_price }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                        @endforeach
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