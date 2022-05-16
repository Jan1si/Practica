@extends('layouts.main-layout')

@section('title', 'Создание роли')


@section('content')

    <div class="content__block">
        <div class="title__block">
            <h2>Создание роли</h2>
        </div>
        <form action="{{route('role_table.store')}}" class="form__registration" method="post">
            @csrf
            @method('POST')
            <div class="form-group">
                <label for="name">Имя</label>
                <input type="text" name="name" required>
                @error('name')
                <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class="button-form">
                <button class="btn-submit" type="submit">Создать</button>
            </div>

        </form>
    </div>

@endsection
