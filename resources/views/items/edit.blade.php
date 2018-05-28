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
                    <h3 class="panel-title"><strong>Edit Item</strong></h3>
                </div>
                <div class="panel-body">
                    <div class="col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3" style="margin-bottom: 15px;">
                        <img alt="Item Pic" src="http://pngimg.com/uploads/book/book_PNG2114.png" class="img-responsive">
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            {!! Form::model($item,['url' => '/items/'.$user->username.'/'.$item->item_name, 'method' => 'put', 'class' => 'form-horizontal']) !!}
                                <fieldset>
                                    @include('partials.forms.item')                                    
                                </fieldset>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        var panels = $('.item-infos');
        var panelsButton = $('.dropdown-item');
        panels.hide();

        //Click dropdown
        panelsButton.click(function() {
            //get data-for attribute
            var dataFor = $(this).attr('data-for');
            var idFor = $(dataFor);

            //current button
            var currentButton = $(this);
            idFor.slideToggle(400, function() {
                //Completed slidetoggle
                if(idFor.is(':visible'))
                {
                    currentButton.html('<i class="glyphicon glyphicon-chevron-up text-muted"></i>');
                }
                else
                {
                    currentButton.html('<i class="glyphicon glyphicon-chevron-down text-muted"></i>');
                }
            })
        });

        $('[data-toggle="tooltip"]').tooltip();

        $('button').click(function(e) {
            e.preventDefault();
        });
    });
</script>
@stop