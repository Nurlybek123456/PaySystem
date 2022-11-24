@extends('layouts.admin')

@section('content')
    <h1 class="text-lightblue">Информация о Бизнесе</h1>
    <hr>
<p><strong>Наименование</strong>:{{$business->title}}</p>
<p><strong>Счет</strong>:{{$business->balance}}</p>
<p><strong>Контакты</strong>:{{$business->email}}</p>
@endsection
