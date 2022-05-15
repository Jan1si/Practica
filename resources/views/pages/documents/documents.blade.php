@extends('layouts.main-layout')
@section('title', 'Документы')


@section('content')
<div class="row__block">
  <div class="left__side">
    <div class="print__block">
      <div class="content__block">


        <div class="documents__block">
          <h2>Организационно-правовые документы</h2>
          <div class="desc__documnets__block">
            <p>Организационно-правовые документы определяют статус организации, наделяют ее полномочиями (предоставляют права) в осуществлении той или иной деятельности, устанавливают порядок ее работы. В образовательной организации к таким документам относятся: Устав, Лицензия, Свидетельство об аккредитации и т.д.</p>
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
                @foreach($documnets as $item)
                    @if($item->type_documents_id === 1)
                <tr>
                  <td class="number__doc">{{$item->id}}</td>
                  <td><a href="#">{{$item->name_doc}}</a> <span> 767,50 Кбайт / pdf</span></td>
                  <td><a href="#">Скачать</a></td>
                </tr>
                    @endif
                @endforeach
              </tbody>
            </table>
          </div>
        </div>

        <div class="documents__block">
          <h2>Организационно-распорядительные документы</h2>
          <div class="desc__documnets__block">
            <p>Организационно-распорядительные документы – это документы, основным назначением которых является регулирование деятельности организации, позволяющее руководителю ОО обеспечивать реализацию поставленных задач. Организационно-распорядительные документы, как правило, подразумевают процедуру коллегиального согласования, утверждаются непосредственно актом руководителя с резолюцией «утверждаю» или распорядительным документом.</p>
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
                @foreach($documnets as $item)
                    @if($item->type_documents_id === 2)
                <tr>
                  <td class="number__doc">{{$item->id}}</td>
                  <td><a href="#">{{$item->name_doc}}</a> <span> 165,91 Кбайт / pdf</span></td>
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
