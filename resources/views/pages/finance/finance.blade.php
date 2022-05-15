@extends('layouts.main-layout')
@section('title', 'Финансирование')


@section('content')
<div class="row__block">
  <div class="left__side">
    <div class="print__block">
      <div class="content__block">


        <div class="finance__block">
          <h2>Бюджетное финансирование</h2>
          <div class="block__table">
            <table class="table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Документ</th>
                  <th>Ссылка</th>
                </tr>
              </thead>
              <tbody>
                @foreach($documnets as $item)
                    @if($item->type_documents_id === 4)
                <tr>
                  <td class="number__doc">{{$item->id}}</td>
                  <td><a href="#">{{$item->name_doc}}</a> <span> 4,95 Мбайт / pdf</span></td>
                  <td><a href="#">Скачать</a></td>
                </tr>
                    @endif
                @endforeach
              </tbody>
            </table>
          </div>
        </div>

        <div class="finance__block">
          <h2>Внебюджетные ресурсы</h2>
          <div class="block__table">
            <table class="table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Документ</th>
                  <th>Ссылка</th>
                </tr>
              </thead>
              <tbody>
              @foreach($documnets as $item)
                  @if($item->type_documents_id === 5)
                      <tr>
                          <td class="number__doc">{{$item->id}}</td>
                          <td><a href="#">{{$item->name_doc}}</a> <span> 4,95 Мбайт / pdf</span></td>
                          <td><a href="#">Скачать</a></td>
                      </tr>
                  @endif
              @endforeach
              </tbody>
            </table>
          </div>
        </div>


      </div>
    </div>
    <div class="block__print__btn">
      <a title="Печать PDF" class="print__btn">Распечатать содержание страницы</a>
    </div>
</div>
    <div class="right__side">
      @include('includes.right_side')
    </div>
  </div>

@endsection
