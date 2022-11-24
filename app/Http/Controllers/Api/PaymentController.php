<?php

namespace App\Http\Controllers\Api;


use App\Components\ImportDataClient;
use App\Http\Controllers\Controller;
use GuzzleHttp\Psr7\Header;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Testing\Fluent\Concerns\Has;

class PaymentController extends Controller
{

    public function __invoke(Request $request){


        $secretKey='123456';
        $reference_id=1;
        $params = [
            'secret_key' =>Hash::make(1 .$secretKey,['rounds'=>10]),
            'reference_id'=>$reference_id,
            'request_url'=>"/",
            'back_url' => "/",
            'amount' => $request['amount'],
            'pan'=>'4405645000006150',
            'exp_month'=>'09',
            'exp_year'=>'25',
            'cvc'=>'653',
            'description' => 'bla-bla-la',
            'merchant_id' => 1,
            'is_test'=>True,
        ];
        $status = [
            'secret_key' =>Hash::make(1 .$secretKey,['rounds'=>10]),
            'reference_id'=>$reference_id,
            'merchant_id' => 1,

        ];

        $response = Http::withoutVerifying()->post('https://api.tarlanpayments.kz/invoice/create',$params);
        $body = json_decode($response->body());

        return redirect($body->data->redirect_url);
}
}
