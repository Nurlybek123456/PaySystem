@extends('layouts.admin')

@section('content')

    <form action="{{route('business.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label>Наименовение бизнеса</label>
            <input type="text" name="title" class="form-control"  placeholder="Введите название">
            @error('title')
            <p style="color:red">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label>Баланс</label>
            <input type="text" name="account" class="form-control" value="0">
            @error('account')
            <p style="color:red">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label>БИН</label>
            <input type="text" name="BIN" class="form-control" value="">
            @error('BIN')
            <p style="color:red">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label>E-mail</label>
            <input type="email" name="email" class="form-control" placeholder="Введите email">
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


        <button type="submit" class="btn btn-primary mt-3">Создать бизнес</button>

    </form>

@endsection
