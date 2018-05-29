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
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                            <img src="https://media-services.digital-rb.com/s3/live-productcatalogue/sys-master/images/h3d/h49/8833674084382/image001.png?width=320&height=320" class="img-responsive" style="height: 150px; max-width: 200px; margin: 0px auto">
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
                                    <td class="col-md-8 col-lg-8">: {{ $transaction->item->item_seller }}</td>
                                </tr>
                                <tr>
                                    <td class="col-md-4 col-lg-4"><span class="fa fa-info-circle" style="margin-right: 10px"></span>Status</td>
                                    <td class="col-md-8 col-lg-8">:
                                        @if(Auth::user()->username == $transaction->buyer)
                                            @if ($transaction->status == 0)
                                                Tunggu Konfirmasi Penjual<br>
                                            @elseif ($transaction->status == 1)
                                                Segera bayar <br>
                                            @elseif ($transaction->status == 2)
                                                Tunggu Konfirmasi pengiriman oleh penjual <br>
                                            @elseif ($transaction->status == 3)
                                                Konfirmasi Barang Sudah Sampai <br>
                                            @elseif ($transaction->status == 4)
                                                Transaksi Sudah Selesai <br>
                                            @endif
                                        @endif
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    Transaksi ID : {{$transaction->id}}<br>
    Penjual : {{$transaction->seller}} <br>
    Pembeli : {{$transaction->buyer}}<br>
    Status : {{$transaction->status}}<br>

    {!! Form::model($transaction,['url' => '/transactions/'.$transaction->id]) !!}
        @if(Auth::user()->username == $transaction->seller)
            @if ($transaction->status == 0)
                Terima Transaksi<br>
            @elseif ($transaction->status == 1)
                Konfirmasi item terbayarkan <br>
            @elseif ($transaction->status == 2)
                Konfirmasi pengiriman <br>
            @elseif ($transaction->status == 3)
                Tunggu Konfirmasi Pembeli <br>
            @elseif ($transaction->status == 4)
                Transaksi Sudah Selesai <br>
            @endif
            <select id="subcategory" name="status" class="form-control selectpicker">        
                <option value="1"> Terima Pemesanan </option>
                <option value="2"> Konfirmasi Pembayaran </option>
                <option value="3"> Konfirmasi Pengiriman </option>                
            </select>
            {!! Form::submit('Update Transaksi') !!}
        @endif
    {!! Form::close() !!}
@stop