@extends('layouts.main-layout')
@section('title', 'Ссылки')


@section('content')
<div class="row__block">
  <div class="left__side">
    <div class="print__block">
      <div class="content__block">
        <div class="wrapp__links">
          <h2>Полезные ссылки</h2>
          <div class="block__links">
            <div class="block__link__content">
              <a href="#" class="link__group">
                <p>Федеральный портал «Российское образование»</p>
              </a>
              <p class="desc__link">Актуальные новости, анонсы событий, информационные материалы для широкого круга читателей: учащихся, их родителей, педагогов.</p>
            </div>
            
            <div class="block__link__content">
              <a href="#" class="link__group">
                <p>Маам</p>
              </a>
              <p class="desc__link">Международный образовательный портал</p>
            </div>
          </div>
        </div>
       
      </div>
    </div>
    <div class="block__print__btn">
      <span title="Печать PDF" class="print__btn">Распечатать содержание страницы</span>
    </div>
  </div>
    <div class="right__side">
      @include('includes.right_side')
    </div>
  </div>

    
    
  
@endsection