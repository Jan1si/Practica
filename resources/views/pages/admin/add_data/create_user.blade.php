@extends('layouts.main-layout')

@section('title', 'Создание пользователя')


@section('content')

    <div class="content__block">
        <div class="title__block">
            <h2>Создание пользователя</h2>
        </div>
        <form action="{{route('user_table.store')}}" class="form__registration" method="post">
            @csrf
            @method('POST')
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
            <div class="form-group">
                <select name="role">
                    @foreach($roles as $role)
                        <option value="{{$role->id}}">{{$role->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="button-form">
                <button class="btn-submit" type="submit">Создать</button>
            </div>

        </form>
    </div>

@endsection
