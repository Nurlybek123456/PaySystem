@extends('layouts.admin')

@section('content')

    <form action="{{route('client.update',$client->id)}}" method="POST">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label>Фамилия</label>
            <input type="text" name="surname" class="form-control" value="{{$client->surname}}" placeholder="Введите фамилию">
            @error('surname')
            <p style="color:red">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label>Имя</label>
            <input type="text" name="name"class="form-control" value="{{$client->name}}" placeholder="Введите имя">
            @error('name')
            <p style="color:red">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label>Отчество</label>
            <input type="text" name="patronymic"class="form-control"  value="{{$client->patronymic}}"placeholder="Введите отчество">
            @error('patronymic')
            <p style="color:red">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label>Баланс</label>
            <input type="text" name="balance" value="{{$client->balance}}" class="form-control" value="0">
            @error('balance')
            <p style="color:red">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label>email</label>
            <input type="number" name="email" value="{{$client->email}}" class="form-control" placeholder="Введите номер">
            @error('email')
            <p style="color:red">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label>Пароль</label>
            <input type="password" name="password" value="{{$client->password}}"class="form-control" placeholder="Пароль">
            @error('password')
            <p style="color:red">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary mt-3">Редактировать</button>

    </form>

@endsection
