<?php

namespace App\Http\Controllers\Admin\Business;


use App\Http\Controllers\Controller;
use App\Models\Business;

class IndexController extends Controller
{
public function __invoke()
{
    $businesses=Business::all();
    return view('admin.businesses.index',compact('businesses'));
}
}
