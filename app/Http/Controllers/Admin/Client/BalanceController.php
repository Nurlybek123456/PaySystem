<?php

namespace App\Http\Controllers\Admin\Client;


use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;

class BalanceController extends Controller
{
public function __invoke()
{
  $client = Client::where('user_id',Auth::user()->id)->first();
  $data['balance']=$client['balance'];
    return json_encode($data);
}


}
