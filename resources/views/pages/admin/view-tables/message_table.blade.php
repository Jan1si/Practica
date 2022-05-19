@extends('layouts.main-layout')

@section('title', 'Таблица отзывов')


@section('content')

    <div class="row__block">

        @include('pages.admin.includes.left_side')

        <div class="table__container">
            <div class="header__table">
                <div class="title__block">
                    <h2>Отзывы</h2>
                </div>


            </div>
            <div class="body__table">
                <table>
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Пользователь</th>
                        <th>Сообщение</th>
                        <th colspan="1">Действия</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($messages as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->user->name}}</td>
                            <td>{{$item->message}}</td>
                            <td>
                                <form class="form-destroy" action="{{ route('message_table.destroy', $item->id) }}" method="post">
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
