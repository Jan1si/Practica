@extends('layouts.main-layout')

@section('title', 'Редактирование документа')


@section('content')

    <div class="content__block">
        <div class="title__block">
            <h2>Редактирование документа</h2>
        </div>
        <form action="{{route('documents_table.update', $id)}}" class="form__registration" method="post">
            @csrf
            @method('PUT')
            @foreach($documents as $item)
                <div class="form-group">
                    <select name="type">
                        @foreach($types as $type)
                            <option value="{{$type->id}}" @if($type->id == $item->type_documents_id) selected @endif>{{$type->name}}</option>
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
