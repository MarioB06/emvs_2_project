<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        if (auth()->attempt(['username' => $username, 'password' => $password])) {
            return redirect()->intended('/dashboard');
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
        $validator = Validator::make($data, [
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string'],
            'password' => ['required', 'string', 'min:2'],
        ]);

        if ($validator->fails()) {
            dd($validator->errors()->all());
        }

        return $validator;
    }

    protected function create(array $data)
    {
        return User::create([
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/index');
    }
}
