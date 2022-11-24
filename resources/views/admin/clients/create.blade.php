@extends('layouts.admin')

@section('content')

    <form action="{{route('client.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label>Фамилия</label>
            <input type="text" name="surname" class="form-control"  placeholder="Введите фамилию">
            @error('surname')
            <p style="color:red">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label>Имя</label>
            <input type="text" name="name"class="form-control"  placeholder="Введите имя">
            @error('name')
            <p style="color:red">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label>Отчество</label>
            <input type="text" name="patronymic"class="form-control"  placeholder="Введите отчество">
            @error('patronymic')
            <p style="color:red">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label>Баланс</label>
            <input type="text" name="balance" class="form-control" value="0">
            @error('balance')
            <p style="color:red">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label>email</label>
            <input type="email" name="email" class="form-control" placeholder="Введите номер">
            @error('email')
            <p style="color:red">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label>Пароль</label>
            <input type="password" name="password"class="form-control" placeholder="Пароль">
            @error('password')
            <p style="color:red">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary mt-3">Создать пользователя</button>

    </form>

@endsection
