@extends('layouts.app')

@section('content')
    <h1>Freund hinzufügen</h1>

    <form method="post" action="{{ route('dashboard.addFriend') }}">
        @csrf
        <label for="friend_id">Freund ID:</label>
        <input type="text" name="friend_id" required>
        <button type="submit">Freund hinzufügen</button>
    </form>
@endsection
