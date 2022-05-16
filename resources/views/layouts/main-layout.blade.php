<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <title>@yield('title')</title>
</head>
<body>
  <header>
    <div class="container">
      @include('includes.header')
    </div>
  </header>
  <main>
    <div class="container">
      @yield('content')
    </div>
  </main>
  <footer>
    <div class="container">
      @include('includes.footer')
    </div>
  </footer>
  <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
