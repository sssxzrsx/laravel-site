@include('layouts.navbar')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Добавить объявление</title>
</head>
<body>
    <main>
        <form action="{{ route('ads')}}" method="post">
            <p>Название</p>
            <input type="text"> <br>
            <p>Описание</p>
            <input type="text">
        </form>
        <button type="submit">Click here!</button> 
    </main>
</body>
</html>
@show