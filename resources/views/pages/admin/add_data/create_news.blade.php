@extends('layouts.main-layout')

@section('title', 'Создание новости')


@section('content')

    <div class="content__block">
        <div class="title__block">
            <h2>Создание новости</h2>
        </div>
        <form action="{{route('news_table.store')}}" class="form__registration" method="post" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="form-group">
                <label for="titlee">Заголовок</label>
                <input type="text" name="titlee" required>
            </div>
            <div class="form-group">
                <label for="image">Фотография</label>
                <input type="file" name="image">
            </div>
            <div class="form-group">
                <label for="password">Пароль</label>
                <textarea name="description"></textarea>
            </div>
            <div class="button-form">
                <button class="btn-submit" type="submit">Создать</button>
            </div>

        </form>
    </div>

@endsection
