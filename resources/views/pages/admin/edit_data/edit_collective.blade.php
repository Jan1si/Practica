@extends('layouts.main-layout')

@section('title', 'Редактирование персонала')


@section('content')

    <div class="content__block">
        <div class="title__block">
            <h2>Редактирование персонала</h2>
        </div>
        <form action="{{route('collective_table.update' ,$id)}}" class="form__registration" method="post">
            @csrf
            @method('PUT')
            @foreach($collective as $item)
            <div class="form-group">
                <label for="name">Имя</label>
                <input type="text" name="name" value="{{ $item->name }}" required>
            </div>
            <div class="form-group">
                <label for="position">Должность</label>
                <input type="text" name="position" value="{{ $item->postition}}" required>
            </div>
            <div class="form-group">
                <label for="post_collectives">Класс персонала</label>
                <select name="post_collectives">
                    @foreach($posts as $post)
                        <option value="{{$post->id}}" @if($post->id == $item->post_collectives_id) selected @endif>{{$post->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="button-form">
                <button class="btn-submit" type="submit">Редактировать</button>
            </div>
            @endforeach
        </form>
    </div>

@endsection
