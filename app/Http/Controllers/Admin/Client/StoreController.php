<?php

namespace App\Http\Controllers\Admin\Client;
use App\Models\Client;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Client\StoreRequest;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request){

        $data = $request->validated();
        $user = User::create([
            'password'=>Hash::make($data['password']),
            'email'=>$data['email'],])->assignRole('Client');
        $client=$user->client()->create([
            'surname'=>$data['surname'],
            'name'=>$data['name'],
            'patronymic'=>$data['patronymic'],
            'balance'=>$data['balance'],
            ]);




        return redirect()->route('client.index');

}
}
