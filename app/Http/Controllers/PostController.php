<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    // Die Methode index gibt eine Ansicht (View) aller Posts zurück
    public function index()
    {
        // Alle Posts aus der Datenbank abrufen
        $posts = Post::all();

        // Die View 'dashboard.posts' wird geladen und die Posts als Daten übergeben
        return view('dashboard.posts', ['posts' => $posts]);
    }

    // Die Methode create gibt eine Ansicht zum Erstellen eines neuen Posts zurück
    public function create()
    {
        // Die View 'dashboard.posts' wird geladen (vermutlich für das Erstellen eines neuen Posts)
        return view('dashboard.posts');
    }

    // Die Methode store speichert einen neuen Post in der Datenbank
    public function store(Request $request)
    {
        // Validierung der Eingabe des Benutzers
        $request->validate([
            'content' => 'required|string|max:255',
            'title' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif',
        ]);

        // Initialisierung des Bildnamens auf null
        $imageName = null;

        // Überprüfen, ob eine Datei hochgeladen wurde
        if ($request->hasFile('image')) {
            // Das Bild aus der Anfrage abrufen
            $image = $request->file('image');
            // Einen eindeutigen Bildnamen erstellen, basierend auf der aktuellen Zeit
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            // Das Bild in das öffentliche Verzeichnis verschieben
            $image->move(public_path('images/posts'), $imageName);
        }

        // Einen neuen Post in der Datenbank erstellen
        Post::create([
            'user_id' => auth()->id(),
            'content' => $request->input('content'),
            'title' => $request->input('title'),
            'image' => $imageName,
            'likes' => 0,
            'dislikes' => 0,
        ]);

        // Instanz des RankControllers erstellen und die Methode post aufrufen
        $rankController = new RankController();
        $rankController->post(auth()->id());

        // Zurück zur Ansicht 'dashboard.posts' umleiten und eine Erfolgsmeldung übergeben
        return redirect()->route('dashboard.posts')->with('success', 'Beitrag erfolgreich erstellt.');
    }
}
