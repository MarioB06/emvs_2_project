<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function login(Request $request)
    {
        // Validierung, Authentifizierung usw. hier durchführen
        $username = $request->input('username');
        $password = $request->input('password');

        // Weitere Logik hier...

        return "Erfolgreich eingeloggt!";
    }
}
