@extends('layouts.main-layout')

@section('title', 'Профиль')


@section('content')

<div class="content__block">
    <div class="title__block">
        <h2>Здравствуйте {{Auth::user()->name}}</h2>
    </div>
    <div class="sub-title__block">
        <h3>Оставить отзыв</h3>
    </div>
    <form action="" class="form__push-email" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Ваше сообщение</label>
            <textarea name="message" required></textarea>
            @error('message')
            <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div class="button-form">
            <button class="btn-submit" type="submit">Отправить</button>
        </div>
    </form>
</div>


@endsection
