@extends('layouts.navbar')



@section('content')
<h1>Добро пожаловать</h1>

{{--    @if (session('success'))
        <div>
            <p>{{ session('success') }}</p>
        </div>
    @endif

    <h2>Категории</h2>
    <ul>
        @foreach ($categories as $category)
            <li>
                <a href="{{ route('category.ads', $category->id) }}">{{ $category->name }}</a>
            </li>
        @endforeach
    </ul>
    <ul>
        @foreach ($ads as $ad)
            <li>
                <h3>{{ $ad->title }}</h3>
                <p>{{ $ad->description }}</p>
                <p><strong>Category:</strong></p>
            </li>
        @endforeach
    </ul> --}}

@show