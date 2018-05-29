@extends('layouts.master')
@section('content')
    <style>
        .toppad {
            margin-top:20px;
        }
    </style>

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-lg-offset-0 toppad" >
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><strong>My Transactions</strong></h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-lg-offset-0 toppad" >
                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><strong>Buy</strong></h3>
                                    </div>
                                    <div class="panel-body">
                                        @foreach($buyTransactions as $transaction)
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                                    @if($transaction->item->item_image != null)
                                                        <img alt="User Pic" src="{{ asset('storage/item_images/'.$transaction->item->item_image) }}" class="img-responsive">
                                                    @else
                                                        <img src="https://media-services.digital-rb.com/s3/live-productcatalogue/sys-master/images/h3d/h49/8833674084382/image001.png?width=320&height=320" class="img-responsive" style="height: 150px; max-width: 200px; margin: 0px auto">
                                                    @endif
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                                        <a href="{{ url('transactions/'.$transaction->id) }}">
                                                            <strong>{{ $transaction->id }}</strong>
                                                        </a>
                                                        <table class="table table-user-information">
                                                            <tbody>
                                                            <tr>
                                                                <td class="col-md-4 col-lg-4"><span class="fa fa-font" style="margin-right: 10px"></span>Name</td>
                                                                <td class="col-md-8 col-lg-8">: {{ $transaction->item->item_name }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="col-md-4 col-lg-4"><span class="fa fa-dollar" style="margin-right: 10px"></span>Price</td>
                                                                <td class="col-md-8 col-lg-8">: {{ $transaction->item->item_price }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="col-md-4 col-lg-4"><span class="fa fa-user" style="margin-right: 10px"></span>Seller</td>
                                                                <td class="col-md-8 col-lg-8">: {{ $transaction->seller }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="col-md-4 col-lg-4"><span class="fa fa-info-circle" style="margin-right: 10px"></span>Status</td>
                                                                <td class="col-md-8 col-lg-8">:                                                                    
                                                                    @if ($transaction->status == 0)
                                                                        Request Sent
                                                                    @elseif ($transaction->status == 1)
                                                                        Waiting for Seller Confirmation
                                                                    @elseif ($transaction->status == 2)
                                                                        Purchase Confirmed
                                                                    @elseif ($transaction->status == 3)
                                                                        Item is On Da Way
                                                                    @elseif ($transaction->status == 4)
                                                                        Completed
                                                                    @endif                                                                    
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4"></div>
                                                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                                        {!! Form::model($transaction,['url' => '/transactions/'.$transaction->id, 'method' => 'delete']) !!}
                                                        <button class="btn btn-sm btn-danger" type="submit">
                                                            <span class="glyphicon glyphicon-trash" style="margin-right: 5px"></span>Cancel Purchase
                                                        </button>
                                                        {!! Form::close() !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-lg-offset-0 toppad" >
                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><strong>Sell</strong></h3>
                                    </div>
                                    <div class="panel-body">
                                        @foreach($sellTransactions as $transaction)
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">                                                        
                                                    @if($transaction->item->item_image != null)
                                                        <img alt="User Pic" src="{{ asset('storage/item_images/'.$transaction->item->item_image) }}" class="img-responsive">
                                                    @else
                                                        <img src="https://media-services.digital-rb.com/s3/live-productcatalogue/sys-master/images/h3d/h49/8833674084382/image001.png?width=320&height=320" class="img-responsive" style="height: 150px; max-width: 200px; margin: 0px auto">
                                                    @endif
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                                        <a href="{{ url('transactions/'.$transaction->id) }}">
                                                            <strong>{{ $transaction->id }}</strong>
                                                        </a>
                                                        <table class="table table-user-information">
                                                            <tbody>
                                                            <tr>
                                                                <td class="col-md-4 col-lg-4"><span class="fa fa-font" style="margin-right: 10px"></span>Name</td>
                                                                <td class="col-md-8 col-lg-8">: {{ $transaction->item->item_name }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="col-md-4 col-lg-4"><span class="fa fa-dollar" style="margin-right: 10px"></span>Price</td>
                                                                <td class="col-md-8 col-lg-8">: {{ $transaction->item->item_price }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="col-md-4 col-lg-4"><span class="fa fa-user" style="margin-right: 10px"></span>Buyer</td>
                                                                <td class="col-md-8 col-lg-8">: {{ $transaction->buyer }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="col-md-4 col-lg-4"><span class="fa fa-info-circle" style="margin-right: 10px"></span>Status</td>
                                                                <td class="col-md-8 col-lg-8">:                                                                    
                                                                    @if ($transaction->status == 0)
                                                                        Never Seen
                                                                    @elseif ($transaction->status == 1)
                                                                        Waiting for Confirmation
                                                                    @elseif ($transaction->status == 2)
                                                                        Waiting for Payment
                                                                    @elseif ($transaction->status == 3)
                                                                        Sending Item
                                                                    @elseif ($transaction->status == 4)
                                                                        Completed
                                                                    @endif                                                                    
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4"></div>
                                                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                                        {!! Form::model($transaction,['url' => '/transactions/'.$transaction->id, 'method' => 'delete']) !!}
                                                        <button class="btn btn-sm btn-danger" type="submit">
                                                            <span class="glyphicon glyphicon-remove-circle" style="margin-right: 5px"></span>Cancel Confirmation
                                                        </button>
                                                        {!! Form::close() !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
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