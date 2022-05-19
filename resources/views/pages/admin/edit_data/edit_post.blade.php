@extends('layouts.main-layout')

@section('title', 'Редактирование должности')


@section('content')

    <div class="content__block">
        <div class="title__block">
            <h2>Редактирование должности</h2>
        </div>
        <form action="{{route('posts_collective_table.update', $id)}}" class="form__registration" method="post">
            @csrf
            @method('PUT')
            @foreach($post as $item)
            <div class="form-group">
                <label for="name">Название должности</label>
                <input type="text" name="name" value="{{ $item->name }}" required>
            </div>
            <div class="button-form">
                <button class="btn-submit" type="submit">Создать</button>
            </div>
            @endforeach
        </form>
    </div>

@endsection
