<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator; // Füge diese Zeile hinzu
use Illuminate\Support\Facades\Hash; // Füge diese Zeile hinzu
use App\Models\User; // Füge diese Zeile hinzu
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
    
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        $user = $this->create($request->all());

        return redirect('/');
    }

    protected function validator(array $data)
    {
        dd($data);
        return User::create([
            'username' => $data['username'],
            'password' => Hash::make($data['password']),
        ]);
    }

    protected function create(array $data)
    {
        return User::create([
            'username' => $data['username'],
            'password' => Hash::make($data['password']),
        ]);
    }



    public function logout()
    {
        auth()->logout();
        return redirect('/index');
    }


}
