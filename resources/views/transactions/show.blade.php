@extends('layouts.master')
@section('content')
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