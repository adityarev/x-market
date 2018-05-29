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
    <div class="col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1">
        <div class="panel panel-primary">
            <div class="panel-body">            
                <fieldset>                
                    <div class="form-group">
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                            <a href="{{ url('items/'.Auth::user()->username.'/'.$item->item_name.'/manageimages') }}" class="btn btn-info" role="button">Manage Images</a>                                                        
                        </div>                        
                    </div>
                </fieldset>                
            </div>
        </div>
    </div>    
@endif

<div class="form-group">
    <div class="col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1">
    {!! Form::submit('Save', [
        'class' => 'btn btn-success',
        'style' => 'float: left'
    ]) !!}
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