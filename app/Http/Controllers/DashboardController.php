<?php

namespace App\Http\Controllers;

use App\Models\UserS;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.dashboard');
    }

    public function rank()
    {
        $user = Auth::user();

        return view('dashboard.rank', ['user' => $user]);
    }

    public function settings()
    {
        return view('dashboard.settings');
    }

    public function friends()
    {
        $friends = User::where('id', '!=', auth()->user()->id)
            ->whereIn('id', function ($query) {
                $query->select('friend_id')
                    ->from('friends')
                    ->where('user_id', auth()->user()->id);
            })
            ->get();
    
        return view('dashboard.friends', compact('friends'));
    }

    public function account()
    {
        return view('dashboard.account');
    }

    public function posts()
    {
        return view('dashboard.posts');
    }
}
