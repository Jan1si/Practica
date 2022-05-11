<div class="wrapp__header">
  <div class="sub__link__block">
    <ul>
      <a href="#" class="sub__link">
        <span>
          <p>Администрация Златоустовского городского округа Челябинской области</p>
          <svg class="icon__link">
            <use xlink:href="{{ asset('icons/link.svg') }}#link"></use>
          </svg>
        </span>
      </a>
      <a href="#" class="sub__link">
        <span>
          <p>МКУ Управление образования и молодежной политики Златоустовского городского округа</p>
          <svg class="icon__link">
            <use xlink:href="{{ asset('icons/link.svg') }}#link"></use>
          </svg>
        </span>
      </a>
    </ul>
  </div>
  <div class="main__container__header">
    <div class="image__block">
      <img src="{{ asset('img/sad.jpg') }}" alt="">
    </div>
    <div class="company__text__center">
      <p class="sub__text">Муниципальное автономное дошкольное образовательное учреждение</p>
      <a href="#" class="main__text">«Детский сад № 62»</a>
    </div>
    <div class="contact__inform__header">
      <div class="cotact__text">
        <p><span>Адрес</span>456219, Челябинская область, Златоуст, проспект имени Ю.А.Гагарина 3 микрорайон, 39, а</p>
      </div>
      <div class="cotact__text">
        <p><span>Контакты</span><br>+7(351)379-11-04 <br> mdu62zgo@mail.ru</p>
      </div>
    </div>
  </div>
  <div class="header__nav__menu">
    <nav class="nav__menu">
      <div class="burger__menu">
        <div class="line__burger"></div>
      </div>
      
      <ul class="list__btn">
        <a href="{{ route('index') }}" class="link__nav__menu">Главная</a>
        <a href="{{ route('about_us') }}" class="link__nav__menu">О нас</a>
        <a href="{{ route('collective') }}" class="link__nav__menu">Коллектив</a>
        <a href="{{ route('conditions') }}" class="link__nav__menu">Условия</a>
        <a href="{{ route('finance') }}" class="link__nav__menu">Финансирование</a>
        <a href="{{ route('documents') }}" class="link__nav__menu">Докуметы</a>
        <a href="{{ route('links') }}" class="link__nav__menu">Ссылки</a>
        <a href="{{ route('contacts') }}" class="link__nav__menu">Контакты</a>
      </ul>
      <div class="search__blokc">
        <svg class="icon__search">
          <use xlink:href="{{ asset('icons/search.svg') }}#search"></use>
        </svg>
      </div>
      <div class="search__form">
        <form action="">
          <div class="search__group">
            <input type="text" name="search" id="">
            <input type="submit" value="Искать">
          </div>
        </form>
        <div class="close__form">
          <div class="line__close"></div>
        </div>
      </div>
    </nav>
  </div>
</div>