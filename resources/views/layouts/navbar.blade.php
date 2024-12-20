<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
@section('navbar')
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="{{ route('index') }}">Главная</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('ads') }}">Опубликовать объявление</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('register') }}">Аутентификация</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Корзина</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#"></a>
      </li>
    </ul>
  </div>
</nav>
@show
</body>
</html>
