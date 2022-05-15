<div class="wrapp__footer">
  <div class="head__footer">
    @if(Auth::user())
          <a href="{{Route('signin')}}">Выйти({{Auth::user()->name}})</a>
      @else
        <a href="{{Route('signin')}}">Вход</a>
    @endif
    <a href="#">Сайт поддержки пользователей</a>
  </div>
  <div class="body__footer">

    <div class="footer__text__block">
      <div class="footer__logo">
        <p>Муниципальное автономное дошкольное образовательное учреждение</p>
        <a href="#">«Детский сад № 62»</a>
      </div>
      <div class="contact__footer">
        <p>+7(351)379-11-04 mdu62zgo@mail.ru </p>
        <p>456219, Российская Федерация, Челябинская область, Златоуст, проспект имени Ю.А.Гагарина 3 микрорайон, 39, а</p>
        <a href="#">Контакты</a>
      </div>
    </div>
    <div class="footer__function__block">
      <a href="" class="button__style">Версия для слабовидящих</a>
      <div class="function__block__links">
        <a href="#">Карта сайта</a>
        <a href="#">Заметили ошибку</a>
        <a href="#">Использование материалов свйта</a>
      </div>
      <div class="metrik__block">

      </div>
    </div>
  </div>
  <div class="coppy__footer">
    <p>© 06.06.2019 — 2022  МАДОУ «Детский сад № 62» </p>
    <div class="coppy__links">
      <a href="#">Eduface.ru </a>
      <a href="#">Синергия-Инфо</a>
    </div>
  </div>
</div>
