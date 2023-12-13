@extends('layouts.app')

@section('content')
    <h1>Freunde</h1>
    @if($friends->count() > 0)
        <ul>
            @foreach($friends as $friend)
                <li>
                    {{ $friend->username }}
                    <form method="post" action="{{ route('dashboard.removeFriend', ['friendId' => $friend->id]) }}">
                        @csrf
                        @method('delete')
                        <button type="submit">Freundschaft beenden</button>
                    </form>
                </li>
            @endforeach
        </ul>
    @else
        <p>Du hast noch keine Freunde.</p>
    @endif
    <a href="add_friend">Freund suchen</a>
    <a href="requests">Anfragen</a>
@endsection



