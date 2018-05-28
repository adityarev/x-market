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
                    <h3 class="panel-title"><strong>Create Item</strong></h3>
                </div>
                <div class="panel-body">
                    <div class="col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3" style="margin-bottom: 15px;">
                        <img alt="Item Pic" src="http://pngimg.com/uploads/book/book_PNG2114.png" class="img-responsive">
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <form class="form-horizontal">
                                <fieldset>
                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="Item Name">Item Name</label>
                                        <div class="col-md-6">
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-font"></i>
                                                </div>
                                                <input id="item-name" name="item-name" type="text" placeholder="Item Name" class="form-control input-md">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="Price">Price</label>
                                        <div class="col-md-6">
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-dollar"></i>
                                                </div>
                                                <input id="price" name="price" type="text" placeholder="Price" class="form-control input-md">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Textarea -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="Description">Description</label>
                                        <div class="col-md-6">
                                            <textarea class="form-control" rows="10"  id="description" name="description" placeholder="Description"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label" ></label>
                                        <div class="col-md-6">
                                            <a href="#" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> Add</a>
                                            <a href="#" class="btn btn-danger" value=""><span class="glyphicon glyphicon-remove-sign"></span> Cancel</a>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
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