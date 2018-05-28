@extends('layouts.master')
@section('content')
<style>
    .table-item-information > tbody > tr {
        border-top: 1px solid rgb(221, 221, 221);
    }

    .table-item-information > tbody > tr:first-child {
        border-top: 0;
    }

    .table-item-information > tbody > tr > td {
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
                    <h3 class="panel-title"><strong>{{$item->item_name}}</strong></h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-3 col-lg-3 " align="center">
                            <img alt="User Pic" src="https://media-services.digital-rb.com/s3/live-productcatalogue/sys-master/images/h3d/h49/8833674084382/image001.png?width=260&height=260" class="img-responsive">
                        </div>
                        <div class=" col-md-9 col-lg-9 ">
                            <table class="table table-item-information">
                                <tbody>
                                <tr>
                                    <td><span class="fa fa-dollar" style="margin-right: 10px"></span>Price</td>
                                    <td>{{$item->item_price}}</td>
                                </tr>
                                <tr>
                                    <td><span class="fa fa-user" style="margin-right: 10px"></span>Seller</td>
                                    <td>{{$item->user->username}}</td>
                                </tr>
                                <tr>
                                    <td><span class="fa fa-info-circle" style="margin-right: 10px"></span>Description</td>
                                    <td>{{$item->item_description}}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    @if (Session::has('user') && Session::get('user')->username == $user->username)
                        <div class="row">
                            <div class="col-md-3 col-lg-3"></div>
                            <div class="col-md-9 col-lg-9">
                                <button class="btn btn-warning">
                                    <span class="glyphicon glyphicon-pencil" style="margin-right: 5px;"></span>
                                    Edit
                                </button>
                                <button class="btn btn-danger">
                                    <span class="glyphicon glyphicon-trash" style="margin-right: 5px;"></span>
                                    Delete
                                </button>
                            </div>
                        </div>
                    @else
                        <div class="row">
                            <div class="col-md-3 col-lg-3"></div>
                            <div class="col-md-9 col-lg-9">
                                <button class="btn btn-warning">
                                    <span class="glyphicon glyphicon-shopping-cart" style="margin-right: 5px;"></span>
                                    Buy
                                </button>
                                <button class="btn btn-danger">
                                    <span class="glyphicon glyphicon-remove" style="margin-right: 5px;"></span>
                                    Cancel
                                </button>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@stop