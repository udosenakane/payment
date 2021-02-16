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
    
}
