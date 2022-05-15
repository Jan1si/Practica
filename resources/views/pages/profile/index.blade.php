@extends('layouts.main-layout')

@section('title', 'Профиль')


@section('content')

<div class="content__block">
    <div class="title__block profile__title">
        <h2>Здравствуйте {{Auth::user()->name}}</h2>
        @if(Auth::user()->role_id == 2)
            <a href="{{route('view-table')}}">Панель администратора</a>
        @endif
    </div>
    <div class="sub-title__block">
        <h3>Оставить отзыв</h3>
    </div>
    <form action="{{route('message')}}" class="form__push-message" method="post">
        @csrf
        <input name="user_id" type="hidden" value="{{Auth::user()->id}}">
        <div class="form-group">
            <label for="message">Ваше сообщение</label>
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
