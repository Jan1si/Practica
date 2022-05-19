@extends('layouts.main-layout')

@section('title', 'Редактирование категорий')


@section('content')

    <div class="content__block">
        <div class="title__block">
            <h2>Редактирование роли</h2>
        </div>
        <form action="{{route('types_document_table.update', $id)}}" class="form__registration" method="post">
            @csrf
            @method('PUT')
            @foreach($types as $item)
                <div class="form-group">
                    <label for="name">Название категории</label>
                    <input type="text" name="name" value="{{$item->name}}" required>
                </div>
                <div class="button-form">
                    <button class="btn-submit" type="submit">Редактировать</button>
                </div>
            @endforeach
        </form>
    </div>

@endsection
