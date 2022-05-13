@extends('layouts.main-layout')

@section('title', 'Регистрация')

@section('content')


<div class="content__block">
    <div class="title__block">
        <h2>Регистрация</h2>
    </div>
    <form action="{{route('register')}}" class="form__registration" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Имя</label>
            <input type="text" name="name" required>
            @error('name')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" required>
            @error('email')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="password">Пароль</label>
            <input type="password" name="password" required>
            @error('password')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <a class="link__form" href="{{ Route('signin') }}">Войти</a>
        <div class="button-form">
            <button class="btn-submit" type="submit">Зарегистрироваться</button>
        </div>

    </form>
</div>


@endsection
