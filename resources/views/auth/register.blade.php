@include('layouts.navbar')

@section('content')

    <h1>Регистрация</h1>
    <form action="{{ route('store') }}" method="post">
        @csrf
        <div class="name">
            <label for="name">Имя: </label>
            <input type="text" name="name" id="name" placeholder="ИМЯ" value="{{ old('name') }}" required>  
        </div>
        <div class="email">
            <label for="email">Почта: </label>
            <input type="text" name="email" id="email" placeholder="ПОЧТА" value="{{ old('email') }}" required> 
        </div>
        <div class="password">
            <label for="password">Пароль: </label>
            <input type="password" name="password" id="password" placeholder="ПАРОЛЬ" value="{{ old('password') }}" required"> 
        </div>
        <a href="{{ route('login') }}"></a>
        <button type="submit">Регистрация</button>
    </form>
@show
