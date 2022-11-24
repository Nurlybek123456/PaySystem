<?php

namespace App\Http\Controllers\Admin\Business;


use App\Http\Controllers\Controller;
use App\Models\Business;
use App\Models\User;

class ShowController extends Controller
{
public function __invoke(Business $business)
{
    return view('admin.businesses.show',compact('business'));
}
}
