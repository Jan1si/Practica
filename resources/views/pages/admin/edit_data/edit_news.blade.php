@extends('layouts.main-layout')

@section('title', 'Редактирование новостей')


@section('content')

    <div class="content__block">
        <div class="title__block">
            <h2>Редактирование новостей</h2>
        </div>
        <form action="{{route('news_table.update', $id)}}" class="form__registration" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            @foreach($news as $item)
            <div class="form-group">
                <label for="title">Заголовок</label>
                <input type="text" name="title"  value="{{ $item->title }}" required>
            </div>
            <div class="form-group">
                <label for="image">Фотография</label>
                <input type="file" name="image" value="">
            </div>
            <div class="form-group">
                <label for="password">Пароль</label>
                <textarea name="description">{{ $item->description }}</textarea>
            </div>
            <div class="button-form">
                <button class="btn-submit" type="submit">Создать</button>
            </div>
            @endforeach
        </form>
    </div>

@endsection
