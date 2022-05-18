@extends('layouts.main-layout')

@section('title', 'Загрузка документа')


@section('content')

    <div class="content__block">
        <div class="title__block">
            <h2>Загрузка документа</h2>
        </div>
        <form action="{{route('documents_table.store')}}" class="form__registration" method="post" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="form-group">
                <label for="doc">Документ</label>
                <input type="file" name="doc">
            </div>
            <div class="form-group">
                <select name="type">
                    @foreach($types as $type)
                        <option value="{{$type->id}}">{{$type->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="button-form">
                <button class="btn-submit" type="submit">Загрузить</button>
            </div>

        </form>
    </div>

@endsection
