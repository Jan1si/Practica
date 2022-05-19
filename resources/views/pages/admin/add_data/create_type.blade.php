@extends('layouts.main-layout')

@section('title', 'Создание категории')


@section('content')

    <div class="content__block">
        <div class="title__block">
            <h2>Создание категории</h2>
        </div>
        <form action="{{route('types_document_table.store')}}" class="form__registration" method="post">
            @csrf
            @method('POST')
            <div class="form-group">
                <label for="name">Название категории</label>
                <input type="text" name="name" required>
            </div>
            <div class="button-form">
                <button class="btn-submit" type="submit">Создать</button>
            </div>

        </form>
    </div>

@endsection
