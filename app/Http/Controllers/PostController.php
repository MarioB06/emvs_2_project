<?php

namespace App\Http\Controllers;

use App\Http\Controllers\RankController;
use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('dashboard.posts', ['posts' => $posts]);
    }

    public function create()
    {
        return view('dashboard.posts');
    }

    public function store(Request $request)
    {
        
        // Validiere die Eingabe
        $request->validate([
            'content' => 'required|string|max:255',
            'title' => '',
            
            
        ]);

        // Erstelle den Beitrag in der Datenbank
        Post::create([
            'user_id' => auth()->id(),
            'content' => $request->input('content'),
            'title' => 'Standardtitel',
            'likes' => 0,
            'dislikes' => 0,
        ]);
        $userId = auth()->id();
        $rankedController = new RankController();
        $rankedController->post($userId);

        // Optional: Zeige eine Bestätigungsnachricht oder leite den Benutzer weiter
        return redirect()->route('dashboard.posts')->with('success', 'Beitrag erfolgreich erstellt.');
    }
}