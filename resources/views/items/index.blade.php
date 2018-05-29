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
                        <h3 class="panel-title"><strong>{{ $user->username }}'s Items</strong></h3>
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
                                            <div class="col-md-4 col-lg-4 col-md-offset-1 col-lg-offset-1" style="padding:0px">
                                                @if(Auth::check() && Auth::user()->username == $item->user->username)
                                                    <a href="{{ url('items/'.$item->user->username.'/'.$item->item_name.'/edit') }}">
                                                @else
                                                    <a href="{{ url('items/'.$item->user->username.'/'.$item->item_name) }}">
                                                @endif
                                                    <h4>{{$item->item_name}}</h4>
                                                </a>
                                                <span class="fa fa-dollar" style="margin-right: 5px"></span>{{ $item->item_price }}
                                            </div>
                                            @if(Auth::check() && Auth::user()->username == $item->user->username)
                                            <div class="col-md-3 col-lg-3" style="padding: 0px;">
                                                <a href="{{ url('items/'.$item->user->username.'/'.$item->item_name.'/edit') }}">
                                                    <button class="btn btn-warning col-md-12 col-lg-12" style="margin-top: 15px">
                                                        <span class="glyphicon glyphicon-pencil" style="margin-right: 5px;"></span>Edit
                                                    </button>
                                                </a>

                                                <button class="btn btn-danger col-md-12 col-lg-12" id="delete-btn-{{ $item->id }}" style="margin-top: 15px">
                                                    <span class="glyphicon glyphicon-remove-circle" style="margin-right: 5px;"></span>Delete
                                                </button>

                                                <!-- Delete Modal -->
                                                <div class="modal fade" id="delete-modal-{{ $item->id }}" role="dialog">
                                                    <div class="modal-dialog">
                                                        {!! Form::model($item,['url' => 'items/'.$item->user->username.'/'.$item->item_name,'method'=>'delete']) !!}
                                                            <!-- Modal content-->
                                                            <div class="modal-content">
                                                                <div class="modal-header" style="padding:35px 50px;">
                                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                    <h4><span class="glyphicon glyphicon-warning-sign"></span> Warning!</h4>
                                                                </div>
                                                                <div class="modal-body" style="padding:40px 50px;">
                                                                    <h5>This item would be delete permanently. Are you sure ?</h5>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <a href="{{ url('items/'.$item->user->username.'/'.$item->item_name.'/delete') }}" data-method="delete">
                                                                        <button type="submit" class="btn btn-danger btn-default">
                                                                            <span class="glyphicon glyphicon-trash"></span>Yes                                                                            
                                                                        </button>
                                                                    </a>
                                                                    <button type="submit" class="btn btn-success" data-dismiss="modal">
                                                                        <span class="glyphicon glyphicon-remove"></span> No
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        {!! Form::close() !!}
                                                    </div>
                                                </div>
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="panel-footer" style="overflow: auto">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
                            @if(Auth::check() && Auth::user()->username == $user->username)
                            <a href=" {{ url('items/create') }} ">
                                <button class="btn btn-primary pull-right">
                                    <span class="glyphicon glyphicon-plus" style="margin-right: 5px"></span>Add
                                </button>
                            </a>
                            @endif
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