@extends('layouts.admin')

@section('content')
    <div class="col-1 mb-3">
        <a href="{{route('client.create')}}" class="btn btn-block btn-primary">+</a>
    </div>
    <div class="col-12">
        <div class="card-body table-responsive p-0">
    <table class="table table-hover text-nowrap">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Фамилия</th>
            <th scope="col">Имя</th>
            <th scope="col">Отчество</th>
            <th scope="col">Баланс</th>
            <th class=" align-content-center" colspan="3">Действие</th>
        </tr>
        </thead>
        <tbody>
        @foreach($clients as $client)
            <tr>
                <td>{{$client->id}}</td>
                <td>{{$client->surname}}</td>
                <td>{{$client->name}}</td>
                <td>{{$client->patronymic}}</td>
                <td>{{$client->balance}}</td>
                <td><a href="{{route('client.show',$client->id)}}"><i class="far fa-eye"></i></a></td>
                <td><a href="{{route('client.edit',$client->id)}}"><i class="fas fa-pencil-alt"></i></a></td>
                <td>
                    <form action="{{route('client.delete',$client->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="border-0 bg-transparent ">
                            <i class="fas fa-trash text-danger"></i>
                        </button>
                    </form>
                </td>

            </tr>

        @endforeach

        </tbody>
    </table>
        </div>
    </div>

@endsection
