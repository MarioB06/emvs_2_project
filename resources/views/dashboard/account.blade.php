@extends('layouts.app')

@section('content')
    <h1>Accounteinstellungen</h1>

    <!-- Benutzerinformationen -->
    <p>Benutzername: {{ $user->username }}</p>

    <!-- Passwortänderungsformular -->
    <h2>Passwort ändern</h2>
    <form method="post" action="{{ url('dashboard/update-password') }}">
        @csrf

        <!-- Aktuelles Passwort -->
        <label for="current_password">Aktuelles Passwort:</label>
        <input type="password" name="current_password" required>

        <!-- Neues Passwort -->
        <label for="new_password">Neues Passwort:</label>
        <input type="password" name="new_password" required>

        <!-- Bestätigung des neuen Passworts -->
        <label for="new_password_confirmation">Passwort bestätigen:</label>
        <input type="password" name="new_password_confirmation" required>

        <!-- Submit-Button -->
        <button type="submit">Passwort aktualisieren</button>
    </form>
@endsection
