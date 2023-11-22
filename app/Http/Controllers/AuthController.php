<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        
        $username = $request->input('username');
        $password = $request->input('password');

      

        if (auth()->attempt(['username' => $username, 'password' => $password])) {
          
            return redirect()->intended('/test');
        }

     
        return redirect()->route('login')->with('error', 'Login Failed');
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/index');
    }


}
