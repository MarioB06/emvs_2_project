<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function rank()
    {
        return view('dashboard.rank');
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
