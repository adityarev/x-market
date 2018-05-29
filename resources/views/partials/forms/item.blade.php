<div class="form-group">
    <label class="col-md-4 control-label" for="Item Name">Item Name</label>
    <div class="col-md-6">
        <div class="input-group">
            <div class="input-group-addon">
                <i class="fa fa-font"></i>
            </div>
            {!! Form::text('item_name', null, ['class' => 'form-control','placeholder' => 'Item Name','class' => 'form-control input-md']) !!}
            <!--<input id="item-name" name="item-name" type="text" placeholder="Item Name" class="form-control input-md">-->
        </div>
    </div>
</div>

<div class="form-group">
    <label class="col-md-4 control-label" for="Price">Price</label>
    <div class="col-md-6">
        <div class="input-group">
            <div class="input-group-addon">
                <i class="fa fa-dollar"></i>
            </div>
            {!! Form::text('item_price', null, ['class' => 'form-control','placeholder' => 'Price','class' => 'form-control input-md']) !!}
            <!--<input id="price" name="price" type="text" placeholder="Price" class="form-control input-md">-->
        </div>
    </div>
</div>

<div class="form-group">
    <label class="col-md-4 control-label" for="Sub Category">Sub Category</label>
    <div class="col-md-6">
        <div class="input-group">
            <div class="input-group-addon">
                <i class="fa fa-chevron-right"></i>
            </div>
            <select id="subcategory" name="sub_category_id" class="form-control selectpicker">
                @foreach($categories as $category)
                    @foreach($category->subCategories as $subCategory)
                        <option value="{{$subCategory->id}}">{{$subCategory->sub_category_name}} </option>
                    @endforeach
                @endforeach                              
            </select>
        </div>
    </div>
</div>

<div class="form-group">
    <label class="col-md-4 control-label" for="Upload photo">Upload photo</label>
    <div class="col-md-6">
        {!! Form::file('item_image') !!}
    </div>
</div>

<div class="form-group">
    <label class="col-md-4 control-label" for="Description">Description</label>
    <div class="col-md-6">        
        {!! Form::textarea ('item_description', null, ['class' => 'form-control', 'placeholder' => 'Description']) !!}        
    </div>
</div>

@if (\Request::is('*/edit'))
    <div class="form-group">
        <label class="col-md-4 control-label" for="Preview Pictures">Preview Pictures</label>
        <div class="col-md-6"></div>
    </div>

    <div class="col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1">
        <div class="panel panel-primary">
            <div class="panel-body">
                <div class="col-md-8 col-lg-8" style="height: 200px">
                    <img alt="Item Pic" src="http://pngimg.com/uploads/book/book_PNG2114.png" class="img-responsive" style="height: 100%">
                </div>
                <div class="col-md-4 col-lg-4" style="height: 200px">
                    <button class="btn btn-danger" id="delete-btn" style="margin: 83px auto">
                        <span class="glyphicon glyphicon-trash" style="margin-right: 5px"></span>
                        Delete
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Modal -->
    @foreach($item->images as $image)
        <div class="modal fade" id="delete-modal-{{ $image->id }}" role="dialog">
            <div class="modal-dialog">
            {!! Form::model($image, ['url' => '/items/'.$item->user->username.'/'.$item->item_name, 'method' => 'delete']) !!}
            <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header" style="padding:35px 50px;">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4><span class="glyphicon glyphicon-warning-sign"></span> Warning!</h4>
                    </div>
                    <div class="modal-body" style="padding:40px 50px;">
                        <h5>This photo would be delete from your preview. Are you sure ?</h5>
                    </div>
                    <div class="modal-footer">
                        <a href="{{ url('items/'.$item->user->username.'/'.$item->item_name.'/delete') }}" data-method="delete">
                            <button type="submit" class="btn btn-danger btn-default">
                                <span class="glyphicon glyphicon-trash"></span>Yes
                            </button>
                        </a>
                        <button type="submit" class="btn btn-success" data-dismiss="modal">
                            <span class="glyphicon glyphicon-remove"></span> No
                        </button>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    @endforeach

    @foreach($item->images as $image)
        <script>
            $(document).ready( function () {
                $('#delete-btn-{{ $image->id }}').click( function () {
                    $('#delete-modal-{{ $image->id }}').modal();
                });
            });
        </script>
    @endforeach
@endif

<div class="form-group">
    <label class="col-md-4 control-label" ></label>
    <div class="col-md-6">
    {!! Form::submit('Save', ['class' => 'btn btn-success']) !!}    
    </div>
</div>

<!--@if (\Request::is('*/edit'))
    {!! Form::submit('Update Item', ['class' => 'btn btn-primary']) !!}
@elseif (\Request::is('*/create'))
    {!! Form::submit('Create Item', ['class' => 'btn btn-primary']) !!}
@elseif (\Request::is('*/delete'))
    {!! Form::submit('Delete Item', ['class' => 'btn btn-primary']) !!}
@endif
-->