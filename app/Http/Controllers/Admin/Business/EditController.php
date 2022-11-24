<?php

namespace App\Http\Controllers\Admin\Business;
use App\Models\Business;

use App\Http\Controllers\Controller;

class EditController extends Controller
{
public function __invoke(Business $business){

    return view('admin.businesses.edit',compact('business'));
}
}
