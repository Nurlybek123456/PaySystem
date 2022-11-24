<?php

namespace App\Http\Controllers\Api;


use App\Components\ImportDataClient;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;

class CreateController extends Controller
{

    public function __invoke(Request $request){
        $data=$request;
        $secretKey='123456';
        $reference_id=1;

        $status = [
            'secret_key' =>Hash::make(1 .$secretKey,['rounds'=>10]),
            'reference_id'=>$reference_id,
            'merchant_id' => 1,

        ];

        $import = new ImportDataClient();

        $response = Http::withoutVerifying()->post('https://api.tarlanpayments.kz/payment/check-status',$status);
        $body = json_decode($response->body());
        $newbody = (((array)$body)['data']->status_desc);

       return view('topUp',compact('newbody'));
}
}
