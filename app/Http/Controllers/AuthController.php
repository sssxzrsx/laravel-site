<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\Support\Facades\Auth;
use illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function index() 
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $data = $request -> validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);
        User::create($data);
        return redirect() -> route('login') -> with('succes', 'Регистрация успешна.');
    }

    public function ShowLoginForm() {
        return view('auth.login');
    }
    
    public function login(Request $request)
    {
        $crendentials = $request -> validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);
        if (Auth::attempt($crendentials)) {
            return
            redirect() -> route('dashboard') -> with('succes', 'вы авторизовались.');
        }
        return back()->withErrors([
            'email' => 'Неверно указанна почта или пароль.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return
        redirect() -> route('login') -> with('succes', 'Вы успешно вышли.');
    }
}
