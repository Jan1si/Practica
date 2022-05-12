@extends('layouts.main-layout')
@section('title', 'Коллектив')


@section('content')
<div class="row__block">
  <div class="left__side">
    <div class="print__block">
      <div class="content__block">
        <div class="collective__block">
          <h2>Работники образовательной организации</h2>
          <div class="collective__type">
            <h3>Руководство образовательной организации<span>/{{$main->count()}} чел</span></h3>
            <div class="list__personal">
              @foreach($main as $item)
              <div class="pers__item">
                <a href="#">{{$item->name}}</a>
                <p>{{$item->postition}}</p>
              </div>
              @endforeach
            </div>
          </div>
          <div class="collective__type">
            <h3>Педагогические работники образовательной организации<span>/{{$minor->count()}} чел</span></h3>
            <div class="list__personal">
              @foreach($minor as $item)
                <div class="pers__item">
                  <a href="#">{{$item->name}}</a>
                  <p>{{$item->postition}}</p>
                </div>
              @endforeach
            </div>
            <div class="collective__type">
              <h3>Иные работники образовательной организации<span>/{{$rest->count()}} чел</span></h3>
              <div class="list__personal">
                @foreach($rest as $item)
                <div class="pers__item">
                  <a href="#">{{$item->name}}</a>
                  <p>{{$item->postition}}</p>
                </div>
                @endforeach
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