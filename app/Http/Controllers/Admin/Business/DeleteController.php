<?php

namespace App\Http\Controllers\Admin\Business;
use App\Models\Business;
use App\Models\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Client\StoreRequest;

class DeleteController extends Controller
{
public function __invoke(Business $business){
    $business->delete();

    User::find($business->user_id)->delete();
    return redirect()->route('business.index',$business->id);
}
}
