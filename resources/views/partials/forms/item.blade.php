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
    <label class="col-md-4 control-label" for="Description">Description</label>
    <div class="col-md-6">        
        {!! Form::textarea ('item_description', null, ['class' => 'form-control', 'placeholder' => 'Description']) !!}        
    </div>
</div>

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