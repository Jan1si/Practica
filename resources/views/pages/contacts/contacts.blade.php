@extends('layouts.main-layout')
@section('title', 'Контакты')


@section('content')
<div class="row__block">
  <div class="left__side">
    <div class="print__block">
      <div class="content__block">
        <div class="wrapp__contacts">
          <h2>Контакты</h2>
          <div class="contact__container">
            <h2>Контакты для связи с руководством</h2>
            <div class="contact__container__content">
              <a class="contanct__number" href="tel: +7(351)379-11-04 ">+7(351)379-11-04</a>
              <a class="contanct__email" href="mailto: mdu62zgo@mail.ru ">mdu62zgo@mail.ru </a>
            </div>
          </div>
        </div>

        <div class="wrapp__contacts">
          <h2>Адреса зданий</h2>
          <div class="contact__container">
            <h2>МАДОУ «Детский сад № 62». Основное здание </h2>
            <div class="contact__container__content">
              <div class="contact__text">
                <span>Адрес:</span>
                <p class="c-t" >456219, Челябинская область, Златоуст, проспект имени Ю.А.Гагарина 3 микрорайон, 39, а </p>
              </div>

              <div class="contact__text">
                <span>Электронный почтовый адрес:</span>
                <a class="c-t" href="mailto: mdu62zgo@mail.ru  ">mdu62zgo@mail.ru</a>
              </div>

              <div class="contact__text">
                <span>Телефон:</span>
                <a class="c-t" href="tel: +7(351)379-11-04">+7(351)379-11-04</a>
              </div>
              
              <div class="contact__text">
                <span>Адрес сайта:</span>
                <a class="c-t" href="https://zlatdou62.educhel.ru ">https://zlatdou62.educhel.ru</a>
              </div>

              <div class="contact__text">
                <span>Как нас найти:</span>
                <p class="c-t">Остановка "Автовокзал" Трамвай № 1, маршрутные такси,автобусы №№ 11,14,15 </p>
              </div>
            </div>
          </div>

          <div class="contact__container">
            <h2>Структурное подразделение "Детский сад №14" </h2>
            <div class="contact__container__content">
              <div class="contact__text">
                <span>Адрес:</span>
                <p class="c-t">456209, Челябинская область, Златоуст , улица имени И.С. Тургенева, 3, а </p>
              </div>

              <div class="contact__text">
                <span>Электронный почтовый адрес:</span>
                <a class="c-t" href="mailto: mdou-astma@mail.ru">mdou-astma@mail.ru</a>
              </div>

              <div class="contact__text">
                <span>Телефон:</span>
                <a class="c-t" href="tel: +7(351)375-50-77">+7(351)375-50-77</a>
              </div>
              
              <div class="contact__text">
                <span>Адрес сайта:</span>
                <a class="c-t" href="https://zlatdou62.educhel.ru">https://zlatdou62.educhel.ru</a>
              </div>

              <div class="c-t" class="contact__text">
                <span>Как нас найти:</span>
                <p>Остановка "Улица Тургенева" Трамвай № 1, маршрутное такси № 18</p>
              </div>
            </div>
          </div>
        </div>

        <div class="wrapp__contacts">
          <h2>Руководство образовательной организации</h2>
          <div class="contact__container person__container">
            <div class="person__image">
              <img src="{{ asset('img/pers2.jpg') }}" alt="">
            </div>
            <div class="person__info">
              <div class="person__info__title">
                <h2 class="name__person"> Сибирякова Надежда Вячеславовна </h2>
                <p>заведующий образовательным учреждением</p>
              </div>
              <p>По всем вопросам функционирования учреждения</p>
              <div class="day__work">
                <p>День и время приема посетителей:</p>
                <ul>
                  <li>понедельник с 16-00 до 18-00, четверг с 16-00 до 17-00</li>
                </ul>
              </div>
              <div class="contact__person">
                <span>
                  <p>Контактный телефон:</p>
                  <a href="tel:+7(351)379-11-04">+7(351)379-11-04</a>
                </span>
                <span>
                  <p>E-mail:</p>
                  <a href="mailto: mdu62zgo@mail.ru">mdu62zgo@mail.ru</a>
                </span>
              </div>
            </div>
          </div>

          <div class="contact__container person__container">
            <div class="person__image">
              <img src="{{ asset('img/pers.jpg') }}" alt="">
            </div>
            <div class="person__info">
              <div class="person__info__title">
                <h2 class="name__person">Шилова Изольда Викторовна </h2>
                <p>руководитель структурного подразделения</p>
              </div>
              <p>По вопросам функционирования структурного подразделения</p>
              <div class="day__work">
                <p>День и время приема посетителей:</p>
                <ul>
                  <li>понедельник с 16-00 до 18-00, четверг с 16-00 до 17-00</li>
                </ul>
              </div>
              <div class="contact__person">
                <span>
                  <p>Контактный телефон:</p>
                  <a href="tel:+7(351)379-11-04">+7(351)375-50-77</a>
                </span>
                <span>
                  <p>E-mail:</p>
                  <a href="mailto: mdu62zgo@mail.ru">mdou-astma@mail.ru</a>
                </span>
              </div>
            </div>
          </div>
        </div>

        <div class="wrapp__contacts">
          <h2>Специалисты образовательной организации</h2>
          <div class="contact__container person__container">
            <div class="person__image">
              <img src="{{ asset('img/pers3.jpg') }}" alt="">
            </div>
            <div class="person__info">
              <div class="person__info__title">
                <h2 class="name__person">Миронова Ольга Вячеславовна </h2>
                <p>старший воспитатель</p>
              </div>
              <p>Методическая работа, взаимодействие с педагогами.</p>
        
              <div class="contact__person">
                <span>
                  <p>Контактный телефон:</p>
                  <a href="tel:+7(351)379-11-04">+7(351)379-11-04</a>
                </span>
      
              </div>
            </div>
          </div>

          <div class="contact__container person__container">
            <div class="person__image">
              <img src="{{ asset('img/pers4.jpg') }}" alt="">
            </div>
            <div class="person__info">
              <div class="person__info__title">
                <h2 class="name__person">Афанасьева Анастасия Николаевна </h2>
                <p>учитель-логопед</p>
              </div>
              <p>Логопедическая работа с воспитанниками</p>
              
              <div class="contact__person">
                <span>
                  <p>Контактный телефон:</p>
                  <a href="tel:+7(351)379-11-04">+7(351)379-11-04</a>
                </span>
               
              </div>
            </div>
          </div>

          <div class="contact__container person__container">
            <div class="person__image">
              <img src="{{ asset('img/pers5.jpg') }}" alt="">
            </div>
            <div class="person__info">
              <div class="person__info__title">
                <h2 class="name__person">Лукоянова Татьяна Александровна </h2>
                <p>музыкальный руководитель</p>
              </div>
              <p>Музыкальная работа с воспитанниками</p>
              
              <div class="contact__person">
                <span>
                  <p>Контактный телефон:</p>
                  <a href="tel:+7(351)379-11-04">+7(351)379-11-04</a>
                </span>
               
              </div>
            </div>
          </div>
        </div>


        <div class="wrapp__contacts">
          <h2>Взаимодействуют с образовательной организацией</h2>
          <div class="contact__container">
            <div class="person__info">
              <div class="person__info__title">
                <h2 class="name__person">Тимофеева Л Н</h2>
                <p>Медицинский работник ГБУЗ "Городская детская больница г.Златоуст"</p>
              </div>
              <div class="day__work">
                <p>День и время приема посетителей:</p>
                <ul>
                  <li>вторник с 8:00 до 14:00, четверг с 8:00 до 14:00 (приём в "Детский сад № 62")</li>
                </ul>
              </div>
              <div class="contact__person">
                <span>
                  <p>Контактный телефон:</p>
                  <a href="tel:+7(351)379-11-04">+7(351)379-11-04</a>
                </span>
      
              </div>
            </div>
          </div>

          <div class="contact__container">
            <div class="person__info">
              <div class="person__info__title">
                <h2 class="name__person">Кузина А А</h2>
                <p>Медицинский работник ГБУЗ "Городская детская больница г.Златоуст" </p>
              </div>
              <div class="day__work">
                <p>День и время приема посетителей:</p>
                <ul>
                  <li>вторник с 12:00 до 15:50, четверг с 8:00 до 12:00 (приём в СП "Детский сад № 14")</li>
                </ul>
              </div>
              <div class="contact__person">
                <span>
                  <p>Контактный телефон:</p>
                  <a href="tel:+7(351)379-11-04">+7(351)375-50-77</a>
                </span>
               
              </div>
            </div>
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