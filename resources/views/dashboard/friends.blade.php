@extends('layouts.app')

@section('content')
    <h1>Freunde</h1>
    @if($friends->count() > 0)
        <ul>
            @foreach($friends as $friend)
                <li>{{ $friend->username }}</li>
            @endforeach
        </ul>
    @else
        <p>Du hast noch keine Freunde.</p>
    @endif
@endsection

<a href="add_friend">Freund suchen</a>



