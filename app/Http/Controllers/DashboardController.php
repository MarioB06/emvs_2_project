<?php

namespace App\Http\Controllers;

use App\Models\UserS;
use Auth;
use Illuminate\Http\Request;

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
        return view('dashboard.friends');
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
