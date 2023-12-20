<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    public function showAccount()
    {
        $user = auth()->user();
        return view('dashboard.account', compact('user'));
    }

    public function updatePassword(Request $request)
    {
    $user = auth()->user();


    if (password_verify($request->input('current_password'), $user->password)) {
        
        $user->password = bcrypt($request->input('new_password'));
        $user->save();

        return redirect()->route('dashboard.account')->with('success', 'Passwort erfolgreich aktualisiert.');
    } else {
        return redirect()->route('dashboard.account')->with('error', 'Aktuelles Passwort ist falsch.');
    }
    }   
    
}
