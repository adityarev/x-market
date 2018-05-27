@extends('layouts.master')
@section('content')
<style>
    .table-category-information > tbody > tr {
        border-top: 1px solid rgb(221, 221, 221);
    }

    .table-category-information > tbody > tr:first-child {
        border-top: 0;
    }

    .table-category-information > tbody > tr > td {
        border-top: 0;
    }

    .toppad {
        margin-top:20px;
    }

    .panel > .list-group {
        margin-bottom: 0;
    }

    .panel > .list-group .list-group-item {
        border-width: 1px 0;
    }

    .panel > .list-group .list-group-item:first-child {
        border-top-right-radius: 0;
        border-top-left-radius: 0;
    }

    .panel > .list-group .list-group-item:last-child {
        border-bottom: 0;
    }
    .panel-heading + .list-group .list-group-item:first-child {
        border-top-width: 0;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><strong>Categories</strong></h3>
                </div>
                <ul class="list-group">
                    @foreach ($categories as $category)
                        <a href="#" class="list-group-item">{{ $category->category_name }}</a>                    
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
@stop