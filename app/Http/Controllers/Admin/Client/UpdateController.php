<?php

namespace App\Http\Controllers\Admin\Client;
use App\Models\Client;
use App\Models\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Client\StoreRequest;

class UpdateController extends Controller
{
public function __invoke(StoreRequest $request,Client $client){
    $data=$request->validated();
    $client->update($data);

    return redirect()->route('client.index');
}
}
