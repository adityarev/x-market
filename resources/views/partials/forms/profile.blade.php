<div class="form-group">
    <label class="col-md-4 control-label" for="Username">Username</label>
    <div class="col-md-6">
        <div class="input-group">
            <div class="input-group-addon">
                <i class="fa fa-user"></i>
            </div>
            <div class="form-controls">
                {!! Form::text('username', null, ['class' => 'form-control']) !!}
            </div>            
        </div>
    </div>
</div>

<div class="form-group">
    <label class="col-md-4 control-label" for="Name (Full name)">Name (Full name)</label>
    <div class="col-md-6">
        <div class="input-group">
            <div class="input-group-addon">
                <i class="fa fa-credit-card"></i>
            </div>
            <div class="form-controls">
                {!! Form::text('user_fullname', null, ['class' => 'form-control']) !!}
            </div>
        </div>
    </div>
</div>

<!--<div class="form-group">
    {!! Form::label('user_name', 'Name') !!}
    <div class="form-controls">
        {!! Form::text('user_name', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('user_fullname', 'Full Name') !!}
    <div class="form-controls">
        {!! Form::text('user_fullname', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('user_city', 'City') !!}
    <div class="form-controls">
        {!! Form::text('user_city', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('user_address', 'Address') !!}
    <div class="form-controls">
        {!! Form::text('user_address', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('user_description', 'Description') !!}
    <div class="form-controls">
        {!! Form::text('user_description', null, ['class' => 'form-control']) !!}
    </div>
</div>

{!! Form::submit('Update Profile', ['class' => 'btn btn-primary']) !!}-->