<?php

namespace App\Http\Controllers\Admin\Client;
use App\Models\Client;
use App\Models\User;

use App\Http\Controllers\Controller;

class DeleteController extends Controller
{
public function __invoke(Client $client){
    $client->delete();
    User::find($client->user_id)->delete();
    return redirect()->route('client.index',$client->id);
}
}
