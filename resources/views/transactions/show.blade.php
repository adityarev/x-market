@extends('layouts.master')
@section('content')
    <style>
        .toppad {
            margin-top:20px;
        }
    </style>

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xs-offset-0 col-sm-offset-0 col-md-offset-2 col-lg-offset-2 toppad">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><strong>Transcation ID : {{$transaction->id}}</strong></h3>
                    </div>

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
                                    @if(Auth::user()->username == $transaction->buyer)
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
                                    @else
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
                                    @endif
                                    </tbody>
                                </table>
                                @if (Auth::user()->username == $transaction->buyer && $transaction->status == 2)
                                    <button class="btn btn-sm btn-success pull-right">
                                        I have completed the payment
                                    </button>
                                @endif

                                @if(Auth::user()->username == $transaction->seller)
                                    {!! Form::model($transaction,['url' => '/transactions/'.$transaction->id]) !!}
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="row">
                                                <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                                    <select id="subcategory" name="status" class="form-control selectpicker pull-right">
                                                        <option value="1"> Terima Pemesanan </option>
                                                        <option value="2"> Konfirmasi Pembayaran </option>
                                                        <option value="3"> Konfirmasi Pengiriman </option>
                                                    </select>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                                    {!! Form::submit('Update Transaction', [
                                                        'class' => 'btn btn-primary',
                                                        'style' => 'float : right'
                                                    ]) !!}
                                                    {!! Form::close() !!}
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
        </div>
    </div>


    {{--Transaksi ID : {{$transaction->id}}<br>--}}
    {{--Penjual : {{$transaction->seller}} <br>--}}
    {{--Pembeli : {{$transaction->buyer}}<br>--}}
    {{--Status : {{$transaction->status}}<br>--}}

    {{--{!! Form::model($transaction,['url' => '/transactions/'.$transaction->id]) !!}--}}
        {{--@if(Auth::user()->username == $transaction->seller)--}}
            {{--@if ($transaction->status == 0)--}}
                {{--Terima Transaksi<br>--}}
            {{--@elseif ($transaction->status == 1)--}}
                {{--Konfirmasi item terbayarkan <br>--}}
            {{--@elseif ($transaction->status == 2)--}}
                {{--Konfirmasi pengiriman <br>--}}
            {{--@elseif ($transaction->status == 3)--}}
                {{--Tunggu Konfirmasi Pembeli <br>--}}
            {{--@elseif ($transaction->status == 4)--}}
                {{--Transaksi Sudah Selesai <br>--}}
            {{--@endif--}}
            {{--<select id="subcategory" name="status" class="form-control selectpicker">--}}
                {{--<option value="1"> Terima Pemesanan </option>--}}
                {{--<option value="2"> Konfirmasi Pembayaran </option>--}}
                {{--<option value="3"> Konfirmasi Pengiriman </option>--}}
            {{--</select>--}}
            {{--{!! Form::submit('Update Transaksi') !!}--}}
        {{--@endif--}}
    {{--{!! Form::close() !!}--}}
@stop