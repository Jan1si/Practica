<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/admin_style.css')}}">
    <title>@yield('title')</title>
</head>
<body>
<div class="container">

    <div class="wrapp__content-block">
        <div class="header-block">
            <div class="link__to-profile">
                <a href="{{back()->getTargetUrl()}}">Назад</a>
                <a href="#">Профиль</a>
            </div>
            <div class="title-block">
                <h2>Панель администратора</h2>
            </div>
        </div>
        <div class="body__block">
            @yield('content')
        </div>
    </div>

</div>

</body>
</html>
