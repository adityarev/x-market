@extends('layouts.master')
@section('content')
    @foreach($item->images as $itemImage)
        {{$itemImage->id}}
    @endforeach

    <a href="{{url('items/'.Auth::user()->username.'/'.$item->item_name.'/addimage')}}">Add Image</a>
@stop