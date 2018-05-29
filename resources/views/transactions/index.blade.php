@extends('layouts.master')
@section('content')
    Item Dibeli<br>
        @foreach($buyTransactions as $transaction)
            <a href="{{ url('transactions/'.$transaction->id) }}">
            {{$transaction->item->item_name}} <br>
            </a>
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
        @endforeach
    Item Dijual<br>
        @foreach($sellTransactions as $transaction)
            <a href="{{ url('transactions/'.$transaction->id) }}">
            {{$transaction->item->item_name}} 
            </a>
            @if(Auth::user()->username == $transaction->seller)
                @if ($transaction->status == 0)
                    Terima Transaksi<br>
                @elseif ($transaction->status == 1)
                    Konfirmasi item terbayarkan <br>
                @elseif ($transaction->status == 2)
                    Konfirmasi pengiriman <br>
                @elseif ($transaction->status == 3)
                    Tunggu Konfirmasi Pembeli
                @elseif ($transaction->status == 4)
                    Transaksi Sudah Selesai
                @endif            
            @endif            
        @endforeach
@stop