@extends('layouts.main-layout')

@section('title', 'Панель администратора')


@section('content')

    <div class="row__block">

    @include('pages.admin.includes.left_side')

        @if($messages && $messages->count())
        <div class="message__users-wrapp">
            <div class="title__block">
                <h2>Отзывы</h2>
            </div>
            <div class="message__list">
                @foreach($messages as $item)
                <div class="message">
                    <div class="destroy__message">
                        <form action="{{ route('message_table.destroy', $item->id) }}" method="post">
                            @CSRF
                            @method('DELETE')
                            <button>
                                <span class="material-symbols-outlined">delete</span>
                            </button>
                        </form>
                    </div>
                    <div class="header-message">
                        <div class="user"><a href="mailto:{{$item->user->email}}">{{$item->user->email}}</a></div>
                        <div class="date__publish">{{$item->created_at}}</div>
                    </div>
                    <div class="body-message">
                        <p class="text__message">
                            {{$item->message}}
                        </p>
                    </div>
                </div>
                    @endforeach
            </div>
        </div>
        @endif
    </div>


{{--                <div class="table__container">--}}
{{--                    <div class="header__table">--}}
{{--                        <div class="title-table">--}}
{{--                            <h3>Новости</h3>--}}
{{--                        </div>--}}
{{--                        <div class="add__table">--}}
{{--                            <a class="add__data" href="#">Добавить</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="body__table">--}}
{{--                        <table>--}}
{{--                            <thead>--}}
{{--                            <tr>--}}
{{--                                <th>#</th>--}}
{{--                                <th>Заголовок</th>--}}
{{--                                <th>Фотография</th>--}}
{{--                                <th>Описание</th>--}}
{{--                                <th>Дата создания</th>--}}
{{--                                <th>Дата обновления</th>--}}
{{--                                <th colspan="2">Действия</th>--}}
{{--                            </tr>--}}
{{--                            </thead>--}}
{{--                            <tbody>--}}
{{--                            @foreach($news as $item)--}}
{{--                                <tr>--}}
{{--                                    <td>{{$item->id}}</td>--}}
{{--                                    <td>{{$item->title}}</td>--}}
{{--                                    <td>{{$item->image}}</td>--}}
{{--                                    <td>{{$item->description}}</td>--}}
{{--                                    <td>{{$item->created_at}}</td>--}}
{{--                                    <td>{{$item->updated_at}}</td>--}}
{{--                                    <td><a class="edit" href="">Редактировать</a></td>--}}
{{--                                    <td><a class="destroy" href="">Удалить</a></td>--}}
{{--                                </tr>--}}
{{--                            @endforeach--}}
{{--                            </tbody>--}}
{{--                        </table>--}}
{{--                    </div>--}}

{{--                </div>--}}


{{--                <div class="table__container">--}}
{{--                    <div class="header__table">--}}
{{--                        <div class="title-table">--}}
{{--                            <h3>Типы документов</h3>--}}
{{--                        </div>--}}
{{--                        <div class="add__table">--}}
{{--                            <a class="add__data" href="#">Добавить</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="body__table">--}}
{{--                        <table>--}}
{{--                            <thead>--}}
{{--                            <tr>--}}
{{--                                <th>#</th>--}}
{{--                                <th>Название типа</th>--}}
{{--                                <th>Дата создания</th>--}}
{{--                                <th>Дата обновления</th>--}}
{{--                                <th colspan="2">Действия</th>--}}
{{--                            </tr>--}}
{{--                            </thead>--}}
{{--                            <tbody>--}}
{{--                            @foreach($type_documents as $item)--}}
{{--                                <tr>--}}
{{--                                    <td>{{$item->id}}</td>--}}
{{--                                    <td>{{$item->name}}</td>--}}
{{--                                    <td>{{$item->created_at}}</td>--}}
{{--                                    <td>{{$item->updated_at}}</td>--}}
{{--                                    <td><a class="edit" href="">Редактировать</a></td>--}}
{{--                                    <td><a class="destroy" href="">Удалить</a></td>--}}
{{--                                </tr>--}}
{{--                            @endforeach--}}
{{--                            </tbody>--}}
{{--                        </table>--}}
{{--                    </div>--}}

{{--                </div>--}}

{{--                <div class="table__container">--}}
{{--                    <div class="header__table">--}}
{{--                        <div class="title-table">--}}
{{--                            <h3>Документы</h3>--}}
{{--                        </div>--}}
{{--                        <div class="add__table">--}}
{{--                            <a class="add__data" href="#">Добавить</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="body__table">--}}
{{--                        <table>--}}
{{--                            <thead>--}}
{{--                            <tr>--}}
{{--                                <th>#</th>--}}
{{--                                <th>Название типа</th>--}}
{{--                                <th>Дата создания</th>--}}
{{--                                <th>Дата обновления</th>--}}
{{--                                <th colspan="2">Действия</th>--}}
{{--                            </tr>--}}
{{--                            </thead>--}}
{{--                            <tbody>--}}
{{--                            @foreach($documents as $item)--}}
{{--                                <tr>--}}
{{--                                    <td>{{$item->id}}</td>--}}
{{--                                    <td>{{$item->name_doc}}</td>--}}
{{--                                    <td>{{$item->created_at}}</td>--}}
{{--                                    <td>{{$item->updated_at}}</td>--}}
{{--                                    <td><a class="edit" href="">Редактировать</a></td>--}}
{{--                                    <td><a class="destroy" href="">Удалить</a></td>--}}
{{--                                </tr>--}}
{{--                            @endforeach--}}
{{--                            </tbody>--}}
{{--                        </table>--}}
{{--                    </div>--}}

{{--                </div>--}}


{{--                <div class="table__container">--}}
{{--                    <div class="header__table">--}}
{{--                        <div class="title-table">--}}
{{--                            <h3>Должности коллектива</h3>--}}
{{--                        </div>--}}
{{--                        <div class="add__table">--}}
{{--                            <a class="add__data" href="#">Добавить</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="body__table">--}}
{{--                        <table>--}}
{{--                            <thead>--}}
{{--                            <tr>--}}
{{--                                <th>#</th>--}}
{{--                                <th>Название должности</th>--}}
{{--                                <th>Дата создания</th>--}}
{{--                                <th>Дата обновления</th>--}}
{{--                                <th colspan="2">Действия</th>--}}
{{--                            </tr>--}}
{{--                            </thead>--}}
{{--                            <tbody>--}}
{{--                            @foreach($post_collective as $item)--}}
{{--                                <tr>--}}
{{--                                    <td>{{$item->id}}</td>--}}
{{--                                    <td>{{$item->name}}</td>--}}
{{--                                    <td>{{$item->created_at}}</td>--}}
{{--                                    <td>{{$item->updated_at}}</td>--}}
{{--                                    <td><a class="edit" href="">Редактировать</a></td>--}}
{{--                                    <td><a class="destroy" href="">Удалить</a></td>--}}
{{--                                </tr>--}}
{{--                            @endforeach--}}
{{--                            </tbody>--}}
{{--                        </table>--}}
{{--                    </div>--}}

{{--                </div>--}}

{{--                <div class="table__container">--}}
{{--                    <div class="header__table">--}}
{{--                        <div class="title-table">--}}
{{--                            <h3>Коллектив</h3>--}}
{{--                        </div>--}}
{{--                        <div class="add__table">--}}
{{--                            <a class="add__data" href="#">Добавить</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="body__table">--}}
{{--                        <table>--}}
{{--                            <thead>--}}
{{--                            <tr>--}}
{{--                                <th>#</th>--}}
{{--                                <th>Имя</th>--}}
{{--                                <th>Должность</th>--}}
{{--                                <th>Дата обновления</th>--}}
{{--                                <th colspan="2">Действия</th>--}}
{{--                            </tr>--}}
{{--                            </thead>--}}
{{--                            <tbody>--}}
{{--                            @foreach($post_collective as $item)--}}
{{--                                <tr>--}}
{{--                                    <td>{{$item->id}}</td>--}}
{{--                                    <td>{{$item->name}}</td>--}}
{{--                                    <td>{{$item->role}}</td>--}}
{{--                                    <td>{{$item->created_at}}</td>--}}
{{--                                    <td>{{$item->updated_at}}</td>--}}
{{--                                    <td><a class="edit" href="">Редактировать</a></td>--}}
{{--                                    <td><a class="destroy" href="">Удалить</a></td>--}}
{{--                                </tr>--}}
{{--                            @endforeach--}}
{{--                            </tbody>--}}
{{--                        </table>--}}
{{--                    </div>--}}

{{--                </div>--}}




@endsection
