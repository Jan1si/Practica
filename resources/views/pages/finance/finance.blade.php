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
                @for($i = 0; $i<5; $i++)
                <tr>
                  <td class="number__doc">{{$i+1}}</td>
                  <td><a href="#">Информация об объеме образовательной деятельности, финансовое обеспечение которой осуществляется за счет бюджетных ассигнований федерального бюджета, бюджетов субъектов Российской Федерации, местных бюджетов, по договорам об образовании за счет средств физических и (или) юридических лиц</a> <span> 4,95 Мбайт / pdf</span></td>
                  <td><a href="#">Скачать</a></td>
                </tr>
                @endfor
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
                @for($i = 0; $i<5; $i++)
                <tr>
                  <td class="number__doc">{{$i+1}}</td>
                  <td><a href="#">Положение о порядке формирования и расходования внебюджетных средств</a> <span> 141,00 Кбайт / pdf</span></td>
                  <td><a href="#">Скачать</a></td>
                </tr>
                @endfor
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