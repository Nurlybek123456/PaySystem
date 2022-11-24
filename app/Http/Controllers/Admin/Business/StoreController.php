<?php

namespace App\Http\Controllers\Admin\Business;
use App\Models\Business;
use App\Models\User;
use Spatie\Permission\Models\Role;


use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Business\StoreRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class StoreController extends Controller
{
public function __invoke(StoreRequest $request){
    $data = $request->validated();

    $user = User::create([
        'password'=>Hash::make($data['password']),
        'email'=>$data['email'],])->assignRole('Business');
    $business=$user->business()->create([
        'title'=>$data['title'],
        'account'=>$data['account'],
        'BIN'=>$data['BIN'],
        ]);


    return redirect()->route('business.index');
}
}
