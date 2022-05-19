@extends('layouts.main-layout')

@section('title', 'Таблица категорий доументов')


@section('content')

    <div class="row__block">

        @include('pages.admin.includes.left_side')

        <div class="table__container">
            <div class="header__table">
                <div class="title__block">
                    <h2>Категории</h2>
                </div>

                <div class="add__date">
                    <a href="{{ route('types_document_table.create') }}" class="add">
                        <span class="material-symbols-outlined">add</span>
                        <p>Добавить</p>
                    </a>
                </div>

            </div>
            <div class="body__table">
                <table>
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Название категории</th>
                        <th colspan="2">Действия</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($types as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->name}}</td>
                            <td><a class="edit" href="{{ route('types_document_table.edit',  $item->id) }}">
                                    <span class="material-symbols-outlined">border_color</span>
                                </a>
                            </td>
                            <td>
                                <form class="form-destroy" action="{{ route('types_document_table.destroy', $item->id) }}" method="post">
                                    @CSRF
                                    @method('DELETE')
                                    <button>
                                        <span class="material-symbols-outlined">delete</span>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>

@endsection
