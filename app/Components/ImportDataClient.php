<?php

namespace App\Components;


use GuzzleHttp\Client;

class ImportDataClient
{
    public $client;

    /**
     * @param $client
     */
    public function __construct()
    {
        $this->client = new Client([
            // Базовый URI используется с относительными запросами
            'base_uri' => 'https://api.tarlanpayments.kz',
            // Можно установить любое количество параметров запроса по умолчанию.
            'timeout'  => 2.0,
            'verify'=>false,
        ]);
    }
}
