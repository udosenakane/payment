<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Payment\Payment\Contracts\PaymentGateway;

Route::post('/transfer', function(Request $request, PaymentGateway $payment_gateway){
    $headers = [
        'Authorization' => 'Bearer sk_test_94da6c3369ddf3e67427077c1b6e0726a7f660a7',
        'Content-Type' => 'application/json'
    ];
    $response = $payment_gateway->transfer($headers, $request->all());
    return response()->json($response);
});