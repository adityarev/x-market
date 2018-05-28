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

<div class="form-group">
    <label class="col-md-4 control-label" for="Upload photo">Upload photo</label>
    <div class="col-md-6">
        <input id="photo" name="photo" class="input-file" type="file">
    </div>
</div>

<div class="form-group">
    <label class="col-md-4 control-label" for="Date Of Birth">Date Of Birth</label>
    <div class="col-md-6">
        <div class="input-group">
            <div class="input-group-addon">
                <i class="fa fa-birthday-cake"></i>

            </div>
            {!! Form::date('user_date_of_birth', null, ['class' => 'form-control input-md']) !!}            
        </div>
    </div>
</div>

<div class="form-group">
    <label class="col-md-4 control-label" for="Gender">Gender</label>
    <div class="col-md-6">
        <label class="radio-inline" for="Gender-0">
            <input type="radio" name="Gender" id="Gender-0" value="1" checked="checked">
            Male
        </label>
        <label class="radio-inline" for="Gender-1">
            <input type="radio" name="Gender" id="Gender-1" value="2">
            Female
        </label>
    </div>
</div>

<div class="form-group">
    <label class="col-md-4 control-label col-xs-12" for="Address">Address</label>
    <div class="col-md-6">
        <div class="input-group">
            <div class="input-group-addon">
                <i class="fa fa-home"></i>
            </div>
            {!! Form::text('user_address', null, ['class' => 'form-control input-md']) !!}
        </div>
    </div>
</div>

<div class="form-group">
    <label class="col-md-4 control-label" for="Phone number ">Phone number </label>
    <div class="col-md-6">
        <div class="input-group">
            <div class="input-group-addon">
                <i class="fa fa-phone"></i>
            </div>
            {!! Form::text('user_phone_number', null, ['class' => 'form-control input-md', 'placeholder' => 'Phone Number']) !!}            
        </div>
    </div>
</div>

<div class="form-group">
    <label class="col-md-4 control-label" for="About Me">About Me</label>
    <div class="col-md-6">
        <textarea class="form-control" rows="10"  id="about-me" name="about-me" placeholder="About Me"></textarea>
    </div>
</div>

<div class="form-group">
    <label class="col-md-4 control-label" ></label>
    <div class="col-md-6">
        {!! Form::submit('Update Profile', ['class' => 'btn btn-success']) !!}        
    </div>
</div>