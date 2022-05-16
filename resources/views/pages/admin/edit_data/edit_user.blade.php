@extends('layouts.main-layout')

@section('title', 'Редактирование пользователя')


@section('content')

    <div class="content__block">
        <div class="title__block">
            <h2>Редактирование пользователя</h2>
        </div>
        <form action="{{route('user_table.update', $id)}}" class="form__registration" method="post">
            @csrf
            @method('PUT')
            @foreach($user as $item)
            <div class="form-group">
                <label for="name">Имя</label>
                <input type="text" name="name" value="{{$item->name}}" required>
                @error('name')
                <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" value="{{$item->email}}" required>
                @error('email')
                <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="password">Пароль</label>
                <input type="password" name="password"  required>
                @error('password')
                <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <select name="role">
                    @foreach($roles as $role)
                        <option value="{{$role->id}}" @if($role->id == $item->role_id) selected @endif>{{$role->name}}</option>
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
