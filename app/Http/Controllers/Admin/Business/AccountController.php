<?php

namespace App\Http\Controllers\Admin\Business;


use App\Http\Controllers\Controller;
use App\Models\Business;
use App\Models\Client;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
public function __invoke()
{
    $business = Business::where('user_id',Auth::user()->id)->first();
    $data['account']=$business['account'];
    return json_encode($data);
}
}
