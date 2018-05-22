{!! Form::model($item, ['url' => '/items/'.$user->user_name.'/'.$item->item_name, 'method' => 'delete']) !!}
    @include('partials.forms.item')
{!! Form::close() !!}