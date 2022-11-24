<?php

namespace App\Http\Controllers\Admin\Client;


use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\User;

class IndexController extends Controller
{
public function __invoke()
{
    $clients=Client::all();
    return view('admin.clients.index',compact('clients'));
}
}
