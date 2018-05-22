{!! Form::open(['url' => '/items/'.$user->user_name]) !!}
    @include('partials.forms.item')
{!! Form::close() !!}