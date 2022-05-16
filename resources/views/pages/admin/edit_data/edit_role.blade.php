@extends('layouts.main-layout')

@section('title', 'Редактирование роли')


@section('content')

    <div class="content__block">
        <div class="title__block">
            <h2>Редактирование роли</h2>
        </div>
        <form action="{{route('role_table.update', $id)}}" class="form__registration" method="post">
            @csrf
            @method('PUT')
            @foreach($role as $item)
                <div class="form-group">
                    <label for="name">Имя</label>
                    <input type="text" name="name" value="{{$item->name}}" required>
                </div>
                <div class="button-form">
                    <button class="btn-submit" type="submit">Редактировать</button>
                </div>
            @endforeach
        </form>
    </div>

@endsection
