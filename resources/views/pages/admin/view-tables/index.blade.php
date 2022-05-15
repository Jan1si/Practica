@extends('layouts.admin-layout')

@section('title', 'Панель администратора')


@section('content')


                <div class="table__container">
                    <div class="header__table">
                        <div class="title-table">
                            <h3>Пользователи</h3>
                        </div>
                    </div>
                    <div class="body__table">
                        <table>
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Имя</th>
                                    <th>Почта</th>
                                    <th>Пароль</th>
                                    <th>Роль</th>
                                    <th>Дата создания</th>
                                    <th>Дата обновления</th>
                                    <th colspan="2">Действия</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->email}}</td>
                                    <td class="password">{{$item->password}}</td>
                                    <td>{{$item->role->name}}</td>
                                    <td>{{$item->created_at}}</td>
                                    <td>{{$item->updated_at}}</td>
                                    <td><a class="edit" href="">Редактировать</a></td>
                                    <td><a class="destroy" href="">Удалить</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>


                <div class="table__container">
                    <div class="header__table">
                        <div class="title-table">
                            <h3>Роли</h3>
                        </div>
                        <div class="add__table">
                            <a class="add__data" href="#">Добавить</a>
                        </div>
                    </div>
                    <div class="body__table">
                        <table>
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Название роли</th>
                                <th colspan="2">Действия</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($roles as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->name}}</td>
                                    <td><a class="edit" href="">Редактировать</a></td>
                                    <td><a class="destroy" href="">Удалить</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>


                <div class="table__container">
                    <div class="header__table">
                        <div class="title-table">
                            <h3>Новости</h3>
                        </div>
                        <div class="add__table">
                            <a class="add__data" href="#">Добавить</a>
                        </div>
                    </div>
                    <div class="body__table">
                        <table>
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Заголовок</th>
                                <th>Фотография</th>
                                <th>Описание</th>
                                <th>Дата создания</th>
                                <th>Дата обновления</th>
                                <th colspan="2">Действия</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($news as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->title}}</td>
                                    <td>{{$item->image}}</td>
                                    <td>{{$item->description}}</td>
                                    <td>{{$item->created_at}}</td>
                                    <td>{{$item->updated_at}}</td>
                                    <td><a class="edit" href="">Редактировать</a></td>
                                    <td><a class="destroy" href="">Удалить</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>


                <div class="table__container">
                    <div class="header__table">
                        <div class="title-table">
                            <h3>Типы документов</h3>
                        </div>
                        <div class="add__table">
                            <a class="add__data" href="#">Добавить</a>
                        </div>
                    </div>
                    <div class="body__table">
                        <table>
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Название типа</th>
                                <th>Дата создания</th>
                                <th>Дата обновления</th>
                                <th colspan="2">Действия</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($type_documents as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->created_at}}</td>
                                    <td>{{$item->updated_at}}</td>
                                    <td><a class="edit" href="">Редактировать</a></td>
                                    <td><a class="destroy" href="">Удалить</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>

                <div class="table__container">
                    <div class="header__table">
                        <div class="title-table">
                            <h3>Документы</h3>
                        </div>
                        <div class="add__table">
                            <a class="add__data" href="#">Добавить</a>
                        </div>
                    </div>
                    <div class="body__table">
                        <table>
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Название типа</th>
                                <th>Дата создания</th>
                                <th>Дата обновления</th>
                                <th colspan="2">Действия</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($documents as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->name_doc}}</td>
                                    <td>{{$item->created_at}}</td>
                                    <td>{{$item->updated_at}}</td>
                                    <td><a class="edit" href="">Редактировать</a></td>
                                    <td><a class="destroy" href="">Удалить</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>


                <div class="table__container">
                    <div class="header__table">
                        <div class="title-table">
                            <h3>Должности коллектива</h3>
                        </div>
                        <div class="add__table">
                            <a class="add__data" href="#">Добавить</a>
                        </div>
                    </div>
                    <div class="body__table">
                        <table>
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Название должности</th>
                                <th>Дата создания</th>
                                <th>Дата обновления</th>
                                <th colspan="2">Действия</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($post_collective as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->created_at}}</td>
                                    <td>{{$item->updated_at}}</td>
                                    <td><a class="edit" href="">Редактировать</a></td>
                                    <td><a class="destroy" href="">Удалить</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>

                <div class="table__container">
                    <div class="header__table">
                        <div class="title-table">
                            <h3>Коллектив</h3>
                        </div>
                        <div class="add__table">
                            <a class="add__data" href="#">Добавить</a>
                        </div>
                    </div>
                    <div class="body__table">
                        <table>
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Имя</th>
                                <th>Должность</th>
                                <th>Дата обновления</th>
                                <th colspan="2">Действия</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($post_collective as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->role}}</td>
                                    <td>{{$item->created_at}}</td>
                                    <td>{{$item->updated_at}}</td>
                                    <td><a class="edit" href="">Редактировать</a></td>
                                    <td><a class="destroy" href="">Удалить</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>

                <div class="table__container">
                    <div class="header__table">
                        <div class="title-table">
                            <h3>Отзыввы</h3>
                        </div>
                        <div class="add__table">
                            <a class="add__data" href="#">Добавить</a>
                        </div>
                    </div>
                    <div class="body__table">
                        <table>
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Сообщение</th>
                                <th>Имя пользователя</th>
                                <th>Дата создания</th>
                                <th>Дата обновления</th>
                                <th colspan="2">Действия</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($messages as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td class="message_user">{{$item->message}}</td>
                                    <td>{{$item->user->name}}</td>
                                    <td>{{$item->created_at}}</td>
                                    <td>{{$item->updated_at}}</td>
                                    <td><a class="edit" href="">Редактировать</a></td>
                                    <td><a class="destroy" href="">Удалить</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>


@endsection
