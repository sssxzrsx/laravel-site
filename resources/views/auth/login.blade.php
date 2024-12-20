@extends('layouts.navbar')
@section('content')

    <h1>Регистрация</h1>
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="email">
            <label for="email">Почта: </label>
            <input type="text" name="email" id="email" value="{{ old('email') }}" required> 
        </div>
        <div class="password">
            <label for="password">Пароль: </label>
            <input type="password" name="password" id="password"value="{{ old('password') }}" required"> 
        </div>
        <button type="submit">Вход</button>
    </form>
@endsection