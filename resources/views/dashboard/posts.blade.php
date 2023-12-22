@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Neuen Beitrag erstellen</h2>

        <!-- Hier ist der spezifische Inhalt für die Beitragserstellungsseite -->
        <form action="{{ route('dashboard.posts.store') }}" method="post">
            @csrf
            <h1>Title</h1>
            <label for="content">Inhalt:</label>
            <textarea name="title" id="content" rows="4" cols="50" required placeholder="titel"></textarea>
<br>
            <textarea name="content" id="content" rows="4" cols="50" required placeholder="post"></textarea>
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
