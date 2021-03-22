<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Config;

class PaymentController extends Controller
{
    public $token = "A21AAKS3galiIv10BG7vH7jUQYpmjV-KA6DMCrVKYPiD-7VnE9KCq9Rh0GZBS6UvppKlMvDXDLjckZ7dqtT19NgHZE6re8B-g";

    public function payWithpaypal(Request $request)
    {
        //return $this->buildRequestBody();
        $client = new \GuzzleHttp\Client();
       // $response = $client->request('POST', 'https://api-m.sandbox.paypal.com/v2/checkout/orders',$this->buildRequestBody());

        $response = $client->request('POST', "https://api-m.sandbox.paypal.com/v2/checkout/orders", [
            'json' => [
                "intent" => "CAPTURE",
                "purchase_units" => [
                    [
                        "amount" => [
                            "currency_code" => "USD",
                            "value" => "100.00"
                        ],
                        'payee' => [
                            'email_address' => 'sb-konzg5270530@personal.example.com'
                        ]
                    ]
                ]
            ],
            'headers' => [
                'Accept' => 'application/json',
                'Accept-Language' => 'en_US',
                'Content-Type' => 'application/json',
                'Authorization' => "Bearer " . $this->token
            ]
        ]            
    );
      
        return $response;
    }
    private function buildRequestBody()
    {
        return [
            'json' => [
                "intent" => "CAPTURE",
                "purchase_units" => [
                    [
                        "amount" => [
                            "currency_code" => "USD",
                            "value" => "100.00"
                        ],
                        'payee' => [
                            'email_address' => 'sb-konzg5270530@personal.example.com'
                        ]
                    ]
                ]
            ],
            'headers' => [
                'Accept' => 'application/json',
                'Accept-Language' => 'en_US',
                'Content-Type' => 'application/json',
                'Authorization' => "Bearer " . $this->token
            ]
        ];
    }
    public function self()
    {
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', "https://api.sandbox.paypal.com/v2/checkout/orders/3GF088528C727415Y", [
            
                'headers' => [
                    'Accept' => 'application/json',
                    'Accept-Language' => 'en_US',
                    'Content-Type' => 'application/json',
                    'Authorization' => "Bearer " . $this->token
                ]
            ]            
        );
        return $response;
    }
    public function approve()
    {
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', "https://www.sandbox.paypal.com/checkoutnow?token=3GF088528C727415Y", [
            
                'headers' => [
                    'Accept' => 'application/json',
                    'Accept-Language' => 'en_US',
                    'Content-Type' => 'application/json',
                    'Authorization' => "Bearer " . $this->token
                ]
            ]            
        );
        return $response;
    }
    public function capture()
    {
        $client = new \GuzzleHttp\Client();
        $response = $client->request('POST', "https://api.sandbox.paypal.com/v2/checkout/orders/3GF088528C727415Y/capture", [
            
                'headers' => [
                    'Accept' => 'application/json',
                    'Accept-Language' => 'en_US',
                    'Content-Type' => 'application/json',
                    'Authorization' => "Bearer " . $this->token
                ]
            ]            
        );
        return $response;   
    }

}
