<?php

namespace App\Http\Controllers\Admin\Business;
use App\Models\Business;
use App\Models\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Business\StoreRequest;

class UpdateController extends Controller
{
public function __invoke(StoreRequest $request,Business $business){
    $data=$request->validated();
    $business->update($data);

    return redirect()->route('business.index');
}
}
