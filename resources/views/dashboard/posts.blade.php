@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Neuen Beitrag erstellen</h2>

        <!-- Hier ist der spezifische Inhalt für die Beitragserstellungsseite -->
        <form action="{{ route('dashboard.posts.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            <label for="title">Titel:</label>
            <input type="text" name="title" id="title" required>
            <br>
            <br>
            <label for="content">Inhalt:</label>
            <textarea name="content" id="content" rows="4" required></textarea>
            <br>
            <br>
            <label for="image">Bild hochladen:</label>
            <input type="file" name="image" id="image">
            <br>
            <br>
            <button type="submit">Posten</button>
        </form>

    </div>

    <div class="container">
    <!-- Hier ist der Bereich für die Anzeige der umgekehrten ersten 10 Posts -->
    @foreach ($posts->reverse()->take(3) as $post)
        <div class="post" style="border: 1px solid black; padding: 10px;">
            <h3>{{ $post->user->username }}</h3>
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->content }}</p>
            <p> {{ $post->created_at->format('d.m.Y H:i') }}</p>
        </div>
    @endforeach
</div>
