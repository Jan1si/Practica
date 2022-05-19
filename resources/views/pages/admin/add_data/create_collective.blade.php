@extends('layouts.main-layout')

@section('title', 'Добавление персонала')


@section('content')

    <div class="content__block">
        <div class="title__block">
            <h2>Добавление персонала</h2>
        </div>
        <form action="{{route('collective_table.store')}}" class="form__registration" method="post">
            @csrf
            @method('POST')
            <div class="form-group">
                <label for="name">Имя</label>
                <input type="text" name="name" required>
            </div>
            <div class="form-group">
                <label for="position">Должность</label>
                <input type="text" name="position" required>
            </div>
            <div class="form-group">
                <label for="post_collectives">Класс персонала</label>
                <select name="post_collectives">
                    @foreach($posts as $post)
                        <option value="{{$post->id}}">{{$post->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="button-form">
                <button class="btn-submit" type="submit">Создать</button>
            </div>

        </form>
    </div>

@endsection
