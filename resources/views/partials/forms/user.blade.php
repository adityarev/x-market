<div class="form-group">
    {!! Form::label('user_name', 'Name') !!}
    <div class="form-controls">
        {!! Form::text('user_name', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('user_email', 'Email') !!}
    <div class="form-controls">
        {!! Form::text('user_email', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('user_password', 'Password') !!}
    <div class="form-controls">
        {!! Form::text('user_password', null, ['class' => 'form-control']) !!}
    </div>
</div>

{!! Form::submit('Register', ['class' => 'btn btn-primary']) !!}