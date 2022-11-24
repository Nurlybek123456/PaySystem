@extends('layouts.admin')

@section('content')
    <h1 class="text-lightblue">Информация о пользователе</h1>
    <hr>
<p><strong>ФИО</strong>:{{$client->surname}} {{$client->name}} {{$client->patronymic}}</p>
<p><strong>Счет</strong>:{{$client->balance}}</p>
<p><strong>Контактный адрес</strong>:{{$client->email}}</p>
@endsection
