@extends('dashboard')

@section('content')
    <div class="justify-content-center col-6" style="margin-left:300px">
    <form action="{{route('payment.index')}}"  method="POST">
        @csrf


        <div class="form-group">
        <label>Сумма</label>
        <input type="number" name="amount" class="form-control"  placeholder="Введите сумму">
    </div>
        <button type="submit" class="btn btn-outline-primary">Пополнить счет</button>
    </form>


        <button type="submit" class="btn btn-outline-warning mt-1" onclick="check()">  Проверить статус платежа</button>
        <div id="check" style="display:none;">
            <p class="fa-warning">Статус платежа:{{$newbody}}</p>
        </div>

</div>
    <script>
        function check(){
            document.getElementById('check').style.display='block';
        }
    </script>

@endsection
