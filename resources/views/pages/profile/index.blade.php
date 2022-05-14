@extends('layouts.main-layout')

@section('title', 'Профиль')


@section('content')

<div class="content__block">
    <div class="title__block">
        <h2>Здравствуйте {{Auth::user()->name}}</h2>
    </div>
    <form action="{{route('login')}}" class="form__push-email" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Email</label>
            <input type="email" name="email" required>
            @error('email')
            <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="name">Пароль</label>
            <input type="password" name="password" required>
            @error('password')
            <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <a class="link__form" href="{{ Route('signup') }}">Регистрация</a>
        <div class="button-form">
            <button class="btn-submit" type="submit">Войти</button>
        </div>
    </form>
</div>


@endsection
