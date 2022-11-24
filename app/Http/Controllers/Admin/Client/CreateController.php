<?php

namespace App\Http\Controllers\Admin\Client;


use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;

class CreateController extends Controller
{
public function __invoke()
{

    return view('admin.clients.create');
}
}
