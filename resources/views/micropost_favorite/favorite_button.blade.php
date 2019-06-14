@if
    @if (Auth::user()->is_favoriting($micropost->id))
        {!! Form::open(['route' => ['micropost.unfavorite', $micropost->id], 'method' => 'DELETE']) !!}
        {!! Form::submit('Unfavorite', ['class' => 'btn btn-danger btn-sm']) !!}
        {!! Form::close() !!}
    @else
        {!! Form::open(['route' => ['micropost.favorite', $micropost->id], 'method' => 'POST']) !!}
        {!! Form::submit('favorite', ['class' => 'btn btn-danger btn-sm' ]) !!}
        {!! Form::close() !!}
    @endif
@endif