@if (Auth::user()->is_haveing($item->code))
    {!! Form::open(['route' => 'item_user.dont_have', 'method' => 'delete']) !!}
        {!! Form::hidden('itemCode', $item->code) !!}
        {!! Form::submit('have', ['class' => 'btn btn-success']) !!}
    {!! Form::close() !!}
@else
    {!! Form::open(['route' => 'item_user.have']) !!}
        {!! Form::hidden('itemCode', $item->code) !!}
        {!! Form::submit('have it', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
@endif