@extends('layouts.main-layout')
@section('title', 'Главная')


@section('content')
<div class="row__block">
  <div class="left__side">
    <div class="content__block">
      <style>
        #js-show-iframe-wrapper{position:relative;display:flex;align-items:center;justify-content:center;width:100%;min-width:293px;max-width:100%;background:linear-gradient(138.4deg,#38bafe 26.49%,#2d73bc 79.45%);color:#fff;cursor:pointer}#js-show-iframe-wrapper .pos-banner-fluid *{box-sizing:border-box}#js-show-iframe-wrapper .pos-banner-fluid .pos-banner-btn_2{display:block;width:240px;min-height:56px;font-size:18px;line-height:24px;cursor:pointer;background:#0d4cd3;color:#fff;border:none;border-radius:8px;outline:0}#js-show-iframe-wrapper .pos-banner-fluid .pos-banner-btn_2:hover{background:#1d5deb}#js-show-iframe-wrapper .pos-banner-fluid .pos-banner-btn_2:focus{background:#2a63ad}#js-show-iframe-wrapper .pos-banner-fluid .pos-banner-btn_2:active{background:#2a63ad}@-webkit-keyframes fadeInFromNone{0%{display:none;opacity:0}1%{display:block;opacity:0}100%{display:block;opacity:1}}@keyframes fadeInFromNone{0%{display:none;opacity:0}1%{display:block;opacity:0}100%{display:block;opacity:1}}@font-face{font-family:LatoWebLight;src:url(https://pos.gosuslugi.ru/bin/fonts/Lato/fonts/Lato...) format("woff2"),url(https://pos.gosuslugi.ru/bin/fonts/Lato/fonts/Lato...) format("woff"),url(https://pos.gosuslugi.ru/bin/fonts/Lato/fonts/Lato...) format("truetype");font-style:normal;font-weight:400}@font-face{font-family:LatoWeb;src:url(https://pos.gosuslugi.ru/bin/fonts/Lato/fonts/Lato...) format("woff2"),url(https://pos.gosuslugi.ru/bin/fonts/Lato/fonts/Lato...) format("woff"),url(https://pos.gosuslugi.ru/bin/fonts/Lato/fonts/Lato...) format("truetype");font-style:normal;font-weight:400}@font-face{font-family:LatoWebBold;src:url(https://pos.gosuslugi.ru/bin/fonts/Lato/fonts/Lato...) format("woff2"),url(https://pos.gosuslugi.ru/bin/fonts/Lato/fonts/Lato...) format("woff"),url(https://pos.gosuslugi.ru/bin/fonts/Lato/fonts/Lato...) format("truetype");font-style:normal;font-weight:400}@font-face{font-family:RobotoWebLight;src:url(https://pos.gosuslugi.ru/bin/fonts/Roboto/Roboto-L...) format("woff2"),url(https://pos.gosuslugi.ru/bin/fonts/Roboto/Roboto-L...) format("woff"),url(https://pos.gosuslugi.ru/bin/fonts/Roboto/Roboto-L...) format("truetype");font-style:normal;font-weight:400}@font-face{font-family:RobotoWebRegular;src:url(https://pos.gosuslugi.ru/bin/fonts/Roboto/Roboto-R...) format("woff2"),url(https://pos.gosuslugi.ru/bin/fonts/Roboto/Roboto-R...) format("woff"),url(https://pos.gosuslugi.ru/bin/fonts/Roboto/Roboto-R...) format("truetype");font-style:normal;font-weight:400}@font-face{font-family:RobotoWebBold;src:url(https://pos.gosuslugi.ru/bin/fonts/Roboto/Roboto-B...) format("woff2"),url(https://pos.gosuslugi.ru/bin/fonts/Roboto/Roboto-B...) format("woff"),url(https://pos.gosuslugi.ru/bin/fonts/Roboto/Roboto-B...) format("truetype");font-style:normal;font-weight:400}@font-face{font-family:ScadaWebRegular;src:url(https://pos.gosuslugi.ru/bin/fonts/Scada/Scada-Reg...) format("woff2"),url(https://pos.gosuslugi.ru/bin/fonts/Scada/Scada-Reg...) format("woff"),url(https://pos.gosuslugi.ru/bin/fonts/Scada/Scada-Reg...) format("truetype");font-style:normal;font-weight:400}@font-face{font-family:ScadaWebBold;src:url(https://pos.gosuslugi.ru/bin/fonts/Scada/Scada-Bol...) format("woff2"),url(https://pos.gosuslugi.ru/bin/fonts/Scada/Scada-Bol...) format("woff"),url(https://pos.gosuslugi.ru/bin/fonts/Scada/Scada-Bol...) format("truetype");font-style:normal;font-weight:400}
        </style>
        
        <style>
        #js-show-iframe-wrapper .bf-2{position:relative;display:grid;grid-template-columns:var(--pos-banner-fluid-2__grid-template-columns);grid-template-rows:var(--pos-banner-fluid-2__grid-template-rows);width:100%;max-width:1060px;font-family:LatoWeb,sans-serif;box-sizing:border-box}#js-show-iframe-wrapper .bf-2__decor{grid-column:var(--pos-banner-fluid-2__decor-grid-column);grid-row:var(--pos-banner-fluid-2__decor-grid-row);padding:var(--pos-banner-fluid-2__decor-padding);background:var(--pos-banner-fluid-2__bg-url) var(--pos-banner-fluid-2__bg-position) no-repeat;background-size:var(--pos-banner-fluid-2__bg-size)}#js-show-iframe-wrapper .bf-2__logo-wrap{position:absolute;top:var(--pos-banner-fluid-2__logo-wrap-top);bottom:var(--pos-banner-fluid-2__logo-wrap-bottom);right:0;display:flex;flex-direction:column;align-items:flex-end;padding:var(--pos-banner-fluid-2__logo-wrap-padding);background:#2d73bc;border-radius:var(--pos-banner-fluid-2__logo-wrap-border-radius)}#js-show-iframe-wrapper .bf-2__logo{width:128px}#js-show-iframe-wrapper .bf-2__slogan{font-family:LatoWebBold,sans-serif;font-size:var(--pos-banner-fluid-2__slogan-font-size);line-height:var(--pos-banner-fluid-2__slogan-line-height);color:#fff}#js-show-iframe-wrapper .bf-2__content{padding:var(--pos-banner-fluid-2__content-padding)}#js-show-iframe-wrapper .bf-2__description{display:flex;flex-direction:column;margin-bottom:24px}#js-show-iframe-wrapper .bf-2__text{margin-bottom:12px;font-size:24px;line-height:32px;font-family:LatoWebBold,sans-serif;color:#fff}#js-show-iframe-wrapper .bf-2__text_small{margin-bottom:0;font-size:16px;line-height:24px;font-family:LatoWeb,sans-serif}#js-show-iframe-wrapper .bf-2__btn-wrap{display:flex;align-items:center;justify-content:center}
        </style >
        <div id='js-show-iframe-wrapper'>
          <div class='pos-banner-fluid bf-2'>
        
            <div class='bf-2__decor'>
              <div class='bf-2__logo-wrap'>
                <img class='bf-2__logo'src='https://pos.gosuslugi.ru/bin/banner-fluid/gosuslugi-logo.svg' alt='Госуслуги'/>
                <div class='bf-2__slogan'>Решаем вместе</div >
              </div >
            </div >
            <div class='bf-2__content'>
        
              <div class='bf-2__description'>
                  <span class='bf-2__text'>
                    Не убран мусор, яма на дороге, не горит фонарь?
                  </span >
                <span class='bf-2__text bf-2__text_small'>
                    Столкнулись с проблемой&nbsp;— сообщите о ней!
                  </span >
              </div >
        
              <div class='bf-2__btn-wrap'>
                <!-- pos-banner-btn_2 не удалять; другие классы не добавлять -->
                <button class='pos-banner-btn_2' type='button'>Сообщить о проблеме</button >
              </div >
        
            </div >
        
          </div >
        </div >
        <script>
        
        (function(){
        "use strict";function ownKeys(e,t){var o=Object.keys(e);if(Object.getOwnPropertySymbols){var n=Object.getOwnPropertySymbols(e);if(t)n=n.filter(function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable});o.push.apply(o,n)}return o}function _objectSpread(e){for(var t=1;t<arguments.length;t++){var o=null!=arguments[t]?arguments[t]:{};if(t%2)ownKeys(Object(o),true).forEach(function(t){_defineProperty(e,t,o[t])});else if(Object.getOwnPropertyDescriptors)Object.defineProperties(e,Object.getOwnPropertyDescriptors(o));else ownKeys(Object(o)).forEach(function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(o,t))})}return e}function _defineProperty(e,t,o){if(t in e)Object.defineProperty(e,t,{value:o,enumerable:true,configurable:true,writable:true});else e[t]=o;return e}var POS_PREFIX_2="--pos-banner-fluid-2__",posOptionsInitial={"grid-template-columns":"100%","grid-template-rows":"310px auto","decor-grid-column":"initial","decor-grid-row":"initial","decor-padding":"30px 30px 0 30px","bg-url":"url('https://pos.gosuslugi.ru/bin/banner-fluid/2/banner...)","bg-position":"calc(10% + 64px) calc(100% - 20px)","bg-size":"cover","content-padding":"0 30px 30px 30px","slogan-font-size":"20px","slogan-line-height":"32px","logo-wrap-padding":"20px 30px 30px 40px","logo-wrap-top":"0","logo-wrap-bottom":"initial","logo-wrap-border-radius":"0 0 0 80px"},setStyles=function(e,t){Object.keys(e).forEach(function(o){t.style.setProperty(POS_PREFIX_2+o,e[o])})},removeStyles=function(e,t){Object.keys(e).forEach(function(e){t.style.removeProperty(POS_PREFIX_2+e)})};function changePosBannerOnResize(){var e=document.documentElement,t=_objectSpread({},posOptionsInitial),o=document.getElementById("js-show-iframe-wrapper"),n=o?o.offsetWidth:document.body.offsetWidth;if(n>405)t["slogan-font-size"]="24px",t["logo-wrap-padding"]="30px 50px 30px 70px";if(n>500)t["grid-template-columns"]="min-content 1fr",t["grid-template-rows"]="100%",t["decor-grid-column"]="2",t["decor-grid-row"]="1",t["decor-padding"]="30px 30px 30px 0",t["content-padding"]="30px",t["bg-position"]="0% calc(100% - 70px)",t["logo-wrap-padding"]="30px 30px 24px 40px",t["logo-wrap-top"]="initial",t["logo-wrap-bottom"]="0",t["logo-wrap-border-radius"]="80px 0 0 0";if(n>585)t["bg-position"]="0% calc(100% - 6px)";if(n>800)t["bg-url"]="url('https://pos.gosuslugi.ru/bin/banner-fluid/2/banner...)",t["bg-position"]="0% center";if(n>1020)t["slogan-font-size"]="32px",t["line-height"]="40px",t["logo-wrap-padding"]="30px 30px 24px 50px";setStyles(t,e)}changePosBannerOnResize(),window.addEventListener("resize",changePosBannerOnResize),window.onunload=function(){var e=document.documentElement;window.removeEventListener("resize",changePosBannerOnResize),removeStyles(posOptionsInitial,e)};
        })()
        </script>
        <script>Widget("https://pos.gosuslugi.ru/form", 293443)</script>
    </div>

    <div class="content__block">
      <div class="welcome__block">
        <div class="person__block">
          <img src="{{ asset('img/zav.jpg') }}" alt="">
          <div class="text__person">
            <p>Заведующий</p>
            <p>Сибирякова Надежда Вячеславовна </p>
          </div>
        </div>
        <div class="text__block">
          <h4>Мы рады приветствовать вас на сайте Муниципального автономного дошкольного образовательного учреждения "Детский сад № 62"!</h4>
          <p>Учреждение обеспечивает образовательную деятельность по образовательным программам дошкольного образования, присмотр и уход за детьми, осуществление образовательной деятельности по дополнительным общеразвивающим программам. Педагоги детского сада в работе с детьми используют современные образовательные и здоровьесберегающие технологии.</p>
          <p>Приоритетным направлением в работе дошкольного учреждения является сохранение и укрепление физического и психического здоровья детей с аллергопатологией и с заболеваниями бронхиальной астмой. </p>
        </div>
      </div>
    </div>

    <div class="content__block">
      <div class="news__block">
        <div class="filter__block">
          <h2>Новости</h2>
          <form action="">
            <select name="" id="">
              <option value="Все новости">Все новости</option>
              <option value="Проспект имени Ю.А.Гагарина 3 микрорайон, 39, а">Проспект имени Ю.А.Гагарина 3 микрорайон, 39, а</option>
              <option value="Улица имени И.С Тургенева, 3, а">Улица имени И.С Тургенева, 3, а</option>
            </select>
          </form>
        </div>
        <div class="list__news">
          @foreach($news as $item)
          <div class="news__card">
            <img src="{{ asset('img/'.$item->image ) }}" alt="{{$item->image}}">
            <div class="title__card">
              <h3> <a href="#">{{$item->title}}</a></h3>
              <h4>06.08.2002</h4>
            </div>
            <div class="desc__news">
              <p>{{Str::words($item->description, 20, '...')}}</p>
              <a href="#">Читать дальше</a>
            </div>
          </div>
          @endforeach
          <div class="all__news">
            <a href="#">Все новости</a>
          </div>
        </div>
      </div>
    </div>
</div>
    <div class="right__side">
      @include('includes.right_side')
    </div>
  </div>

    <div class="content__block__full">
      <div class="target__block">
        <h2>Наши приоритеты</h2>
        <div class="list__target">
          <a href="#" class="card__target"><img src="{{ asset('img/t1.png') }}" alt=""></a>
          <a href="#" class="card__target"><img src="{{ asset('img/t2.png') }}" alt=""></a>
          <a href="#" class="card__target"><img src="{{ asset('img/t3.svg') }}" alt=""></a>
          <a href="#" class="card__target"><img src="{{ asset('img/t4.svg') }}" alt=""></a>
        </div>
      </div>
    </div>
    <div class="content__block__full">
      <div class="target__block">
        <h2>Государственные информационные ресурсы</h2>
        <div class="list__gos__resource">
          <a href="#" class="card__gos">
            <svg class="icon__target">
              <use xlink:href="{{ asset('icons/gerb.svg') }}#gerb"></use>
            </svg>
            <p>Министерство просвещения РФ</p>
          </a>
          <a href="#" class="card__gos">
            <svg class="icon__target">
              <use xlink:href="{{ asset('icons/gerb.svg') }}#gerb"></use>
            </svg>
            <p>Минестерство наук и высшего образования РФ</p>
          </a>
          <a href="#" class="card__gos">
            <svg class="icon__target">
              <use xlink:href="{{ asset('icons/chel_gerb.svg') }}#chel_gerb"></use>
            </svg>
            <p>Минестерство образования и науки Челябинской области</p>
          </a>
          <a href="#" class="card__gos">
            <svg class="icon__target">
              <use xlink:href="{{ asset('icons/gerb_nauk.svg') }}#gerb_nauk"></use>
            </svg>
            <p>Федеральная служба по надзору в сфере образования и науки</p>
          </a>
          <a href="#" class="card__gos">
            <svg class="icon__target">
              <use xlink:href="{{ asset('icons/gosuslugi.svg') }}#gosuslugi"></use>
            </svg>
            <p>Портал государственных услуг</p>
          </a>
          <a href="#" class="card__gos">
            <svg class="icon__target">
              <use xlink:href="{{ asset('icons/rkn.svg') }}#rkn"></use>
            </svg>
            <p>Персональные данные. Дети. Роскомнадзор</p>
          </a>
          <a href="#" class="card__gos">
            <svg class="icon__target">
              <use xlink:href="{{ asset('icons/gorod.svg') }}#gorod"></use>
            </svg>
            <p>Сетевой город</p>
          </a>
          <a href="#" class="card__gos">
            <p>Другие информационные ресурсы</p>
          </a>
        </div>
      </div>
    </div>
  
@endsection