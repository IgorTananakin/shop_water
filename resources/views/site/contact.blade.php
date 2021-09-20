@extends('layout')
@section('content')

<div class="container row">
    <div class="contact col-6">
        <h1 class="">Контакты</h1>
        <div>
            <h3 class="">Компания</h3>
            <p class="">ООО Вода Ростова</p>
        </div>
        <div>
            <h3 class="">Адрес</h3>
            <p class="">пер. Островского 96/6</p>
        </div>
        <div>
            <h3 class="">Телефон</h3>
            <p class="">+8 918 523 10 62</p>
        </div>
    </div>


<!-- Проверка на отправку форму обратной связи -->
@if($errors->any())
<div class="alert alert-danger">
    <ul>
    @foreach($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
    </ul>
</div>
@endif
<!-- конец проверки -->

  <div class="feedcontact col-6 d-flex flex-column">
        <h1 class="">Обратная связь</h1>
        {!! Form::open(['url' => 'send_form','class' => 'form-control d-flex flex-column']) !!}
            {{ Form::token()}}
            {{Form::text('name','Имя', array('class' => 'form-control m-1')),['name' => 'name']}}
            {{Form::text('phone','Телефон', array('class' => 'form-control m-1')),['name' => 'phone']}}
            {{Form::submit('Оставить заявку',['class' => 'btn btn-success'])}}
        {!! Form::close() !!}
        
        
       <!-- <a href="{{route('product-data')}}">gfrth</a> -->
      
  </div>

</div>
@endsection