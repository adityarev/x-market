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
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xs-offset-0 col-sm-offset-0 col-md-offset-2 col-lg-offset-2 toppad" >
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><strong>{{$item->item_name}}</strong></h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-4 col-lg-4 col-md-offset-1 col-lg-offset-1" align="center">
                            @if($item->item_image != null)
                                <img alt="User Pic" src="{{ asset('storage/item_images/'.$item->item_image) }}" class="img-responsive">
                            @else
                                <img alt="User Pic" src="https://media-services.digital-rb.com/s3/live-productcatalogue/sys-master/images/h3d/h49/8833674084382/image001.png?width=260&height=260" class="img-responsive">
                            @endif
                        </div>
                        <div class="col-md-6 col-lg- toppad">
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
                                    <td></td>                                    
                                </tr>
                                <tr>
                                    <td>{{$item->item_description}}</td>
                                    <td></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <h4>
                            <a style="position: relative; left: 50px;" href="#" class="typewrite" data-period="2000" data-type='[ "Preview" ]' style="text-decoration: none">
                                <span class="wrap"></span>
                            </a>
                        </h4>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1" style="height: 250px; padding: 110px 0px">
                                <span class="glyphicon glyphicon-chevron-left fa-2x pull-left"></span>
                            </div>
                            <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 panel panel-primary" style="height: 250px">
                                <img src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/medium/dettol_dettol-fresh-anti-bakteri-sabun-mandi--105-gr-_full01.jpg" class="img-responsive" style="height: 100%; margin: 0px auto">
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1" style="height: 250px; padding: 110px 0px">
                                <span class="glyphicon glyphicon-chevron-right fa-2x pull-right"></span>
                            </div>
                        </div>
                    </div>


                    @if (Auth::check() && Auth::user()->username == $user->username)
                        <div class="row">
                            <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 col-xs-offset-1 col-sm-offset-1 col-md-offset-1 col-lg-offset-1" style="text-align: right">
                                <a href="{{ url('items/'.$item->user->username.'/'.$item->item_name.'/edit') }}">
                                    <button class="btn btn-warning">
                                        <span class="glyphicon glyphicon-pencil" style="margin-right: 5px;"></span>
                                        Edit
                                    </button>
                                </a>

                                <button class="btn btn-danger" id="delete-btn">
                                    <span class="glyphicon glyphicon-trash"></span>
                                    Delete
                                </button>


                                <!-- Delete Modal -->
                                <div class="modal fade" id="delete-modal" role="dialog">
                                    <div class="modal-dialog">

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
                                                <a href="{{ url('items/'.$item->user->username.'/'.$item->item_name.'/delete') }}">
                                                    <button class="btn btn-danger btn-default">
                                                        <span class="glyphicon glyphicon-trash"></span> Yes
                                                    </button>
                                                </a>
                                                <button type="submit" class="btn btn-success" data-dismiss="modal">
                                                    <span class="glyphicon glyphicon-remove"></span> No
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="row">
                            <div class="col-md-3 col-lg-3"></div>
                            <div class="col-md-9 col-lg-9">
                                <button class="btn btn-warning" id="buy-btn" style="position:relative; right:60px; float: right;">
                                    <span class="glyphicon glyphicon-shopping-cart"></span>
                                    Buy
                                </button>

                                <!-- Buy Modal -->
                                <div class="modal fade" id="buy-modal" role="dialog">
                                    <div class="modal-dialog">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header" style="padding:35px 50px;">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4><span class="glyphicon glyphicon-info-sign"></span> Confirmation!</h4>
                                            </div>
                                            <div class="modal-body" style="padding:40px 50px;">
                                                <h5>Do you want to buy this item ?</h5>
                                            </div>
                                            <div class="modal-footer">
                                                <a href="{{ url('items/'.$item->user->username.'/'.$item->item_name.'/buy') }}">
                                                    <button class="btn btn-success">
                                                        <span class="glyphicon glyphicon-ok"></span> Yes
                                                    </button>
                                                </a>
                                                <button type="submit" class="btn btn-danger" data-dismiss="modal">
                                                    <span class="glyphicon glyphicon-remove"></span> No
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>                                
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        $("#delete-btn").click(function(){
            $("#delete-modal").modal();
        });

        $("#buy-btn").click(function(){
            $("#buy-modal").modal();
        });
    });

    var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtType.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
            this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
            this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

        var that = this;
        var delta = 200 - Math.random() * 100;

        if (this.isDeleting) { delta /= 2; }

        if (!this.isDeleting && this.txt === fullTxt) {
            delta = this.period;
            this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
            this.isDeleting = false;
            this.loopNum++;
            delta = 500;
        }

        setTimeout(function() {
            that.tick();
        }, delta);
    };

    window.onload = function() {
        var elements = document.getElementsByClassName('typewrite');
        for (var i=0; i<elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-type');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
                new TxtType(elements[i], JSON.parse(toRotate), period);
            }
        }
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
        document.body.appendChild(css);
    };
</script>
@stop