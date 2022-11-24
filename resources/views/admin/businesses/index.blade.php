@extends('layouts.admin')

@section('content')
    <div class="col-1 mb-3">
        <a href="{{route('business.create')}}" class="btn btn-block btn-primary">+</a>
    </div>
    <div class="col-12">
        <div class="card-body table-responsive p-0">
    <table class="table table-hover text-nowrap">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Название</th>
            <th scope="col">Баланс</th>
            <th scope="col">Логин</th>
            <th class=" align-content-center" colspan="3">Действие</th>
        </tr>
        </thead>
        <tbody>
        @foreach($businesses as $business)
            <tr>
                <td>{{$business->id}}</td>
                <td>{{$business->title}}</td>
                <td>{{$business->balance}}</td>
                <td>{{$business->email}}</td>
                <td><a href="{{route('business.show',$business->id)}}"><i class="far fa-eye"></i></a></td>
                <td><a href="{{route('business.edit',$business->id)}}"><i class="fas fa-pencil-alt"></i></a></td>
                <td>
                    <form action="{{route('business.delete',$business->id)}}" method="POST">
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
