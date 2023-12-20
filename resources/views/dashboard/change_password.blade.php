@extends('layouts.app')

@section('content')
    <h1>Passwort ändern</h1>

    <!-- Formular zum Aktualisieren des Passworts -->
    <form method="post" action="{{ route('update-password') }}">
        @csrf

        <label for="current_password">Aktuelles Passwort:</label>
        <input type="password" name="current_password" required>

        <label for="new_password">Neues Passwort:</label>
        <input type="password" name="new_password" required>

        <label for="new_password_confirmation">Passwort bestätigen:</label>
        <input type="password" name="new_password_confirmation" required>

        <button type="submit">Passwort aktualisieren</button>
    </form>
@endsection
