<div class="form-group">
    {!! Form::label('item_name', 'Item\'s Name') !!}
    <div class="form-controls">
        {!! Form::text('item_name', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('item_price', 'Item\'s Price') !!}
    <div class="form-controls">
        {!! Form::text('item_price', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('item_description', 'Description') !!}
    <div class="form-controls">
        {!! Form::text('item_description', null, ['class' => 'form-control']) !!}
    </div>
</div>

@if (\Request::is('*/edit'))
    {!! Form::submit('Update Item', ['class' => 'btn btn-primary']) !!}
@elseif (\Request::is('*/create'))
    {!! Form::submit('Create Item', ['class' => 'btn btn-primary']) !!}
@elseif (\Request::is('*/delete'))
    {!! Form::submit('Delete Item', ['class' => 'btn btn-primary']) !!}
@endif