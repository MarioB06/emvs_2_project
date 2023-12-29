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
    $request->validate([
        'content' => 'required|string|max:255',
        'title' => 'required',
        'image' => 'image|mimes:jpeg,png,jpg,gif',
    ]);

    $imageName = null;

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images/posts'), $imageName);
    }

    Post::create([
        'user_id' => auth()->id(),
        'content' => $request->input('content'),
        'title' => $request->input('title'),
        'image' => $imageName,
        'likes' => 0,
        'dislikes' => 0,
    ]);


    return redirect()->route('dashboard.posts')->with('success', 'Beitrag erfolgreich erstellt.');
}
}
