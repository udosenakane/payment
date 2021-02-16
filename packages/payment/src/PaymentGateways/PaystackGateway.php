<?php

namespace Payment\Payment\PaymentGateways;

use Illuminate\Support\Facades\Http;
use Payment\Payment\Contracts\PaymentGateway;

class PaystackGateway implements PaymentGateway  
{
    
    
    // public $payment_gateway;
    
    /**
     * make transfer/pay/init().
     *
     * @return string
     */


    public function transfer($headers=[], $params=[]){

        $response = Http::withHeaders($headers)->post('https://api.paystack.co/transfer', $params);

        return $response;
    }


    public function list($headers=[], $params=[]){

        // $headers = [
        //     'Authorization' => 'Bearer sk_test_94da6c3369ddf3e67427077c1b6e0726a7f660a7',
        //     'Content-Type' => 'application/json'
        // ];
        $response = Http::withHeaders($headers)->get('https://api.paystack.co/transfer', $params);
        return $response;
    }
    
}
