@extends('layouts.main-layout')
@section('title', 'Условия')


@section('content')
<div class="row__block">
  <div class="left__side">
    <div class="print__block">
      <div class="content__block">
        <div class="conditions__block">
          <h2>Режим работы</h2>

          <div class="conditions__content">
            <div class="time__work">
              <p>Режим работы: с 7:00 до 19:00</p>
              <p>График работы: Понедельник - пятница. Выходные дни: суббота, воскресенье, праздничные дни.</p>
            </div>
          </div>

        </div>

        <div class="conditions__block">
          <h2>Доступная среда</h2>
          <div class="conditions__desc">
            <p>Приоритет социальной политики РФ в области социальной защиты в соответствии с общепризнанными принципами и нормами международного права — создать инвалидам равные с другими гражданами условия для участия в жизни общества, в том числе равное право на получение необходимых социальных услуг для повышения качества жизни.</p>
          </div>
          <div class="conditions__group">
            <img src="{{ asset('img/habitat.png') }}" alt="">
            <div class="conditions__group__text">
              <a href="#">Государственная программа «Доступная среда»</a>
              <p>Конвенция о правах инвалидов, нормативные документы, карта доступности объектов, новости, интервью, горячие линии</p>
            </div>
          </div>

          <div class="conditions__desc">
            <p>Доступная (или безбарьерная) среда — это среда, которая создает легкие и безопасные условия для людей. Доступная среда для инвалидов — это расположение объектов окружающего пространства таким образом, чтобы люди с физическими, сенсорными или интеллектуальными отклонениями пользовались этим пространством с минимальной помощью посторонних.</p>
          </div>

          <div class="conditions__desc">
            <p>Поэтому задача образовательной организации — создать эту «безбарьерную, доступную среду».</p>
          </div>

          <div class="conditions__group__link">
            <h2>Доступная среда в здании</h2>
            <div class="conditions__link">
              <a href="#">Подходы к зданию, пути движения</a>
              <a href="#">Беспрепятственный доступ в здание</a>
              <a href="#">Пути движения внутри здания</a>
              <a href="#">Помещения, место обслуживания инвалидов</a>
              <a href="#">Санитарно-гигиенические помещения</a>
            </div>

          </div>


          <div class="conditions__group__link">
            <h2>Забота о здоровье</h2>
            <div class="conditions__link">
              <a href="#">Специальные условия питания</a>
              <a href="#">Специальные условия охраны здоровья</a>
            </div>
          </div>

          <div class="conditions__group__link">
            <h2>Информационные технологии</h2>
            <div class="conditions__link">
              <a href="#">Доступ к информационным системам и информационно-телекоммуникационным сетям</a>
              <a href="#">Электронные образовательные ресурсы</a>
              <a href="#">Специальные технические средства обучения</a>

            </div>
          </div>


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

                @if($documents && $documents->count())
                  @foreach($documents as $item)
                  <tr>
                      @if($item->type_documents_id === 3)
                    <td class="number__doc">{{$item->id}}</td>
                    <td><a href="#">{{$item->name_doc}}</a> <span> 132,04 Кбайт / pdf</span></td>
                    <td><a href="#">Скачать</a></td>
                      @endif
                  </tr>
                  @endforeach
                @endif
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
