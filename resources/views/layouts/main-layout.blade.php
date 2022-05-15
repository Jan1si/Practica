<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
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
