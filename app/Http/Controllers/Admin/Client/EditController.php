<?php

namespace App\Http\Controllers\Admin\Client;
use App\Models\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Client\StoreRequest;

class EditController extends Controller
{
public function __invoke(Client $client){

    return view('admin.clients.edit',compact('client'));
}
}
