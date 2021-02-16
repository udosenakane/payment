<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Payment\Payment\Contracts\PaymentGateway;

// to be moved to controller

Route::post('/transfer', function(Request $request, PaymentGateway $payment_gateway){
    
    $token = $request->header('Authorization');

    $headers = [
        'Authorization' => $token,
        'Content-Type' => 'application/json'
    ];
    
    $response = $payment_gateway->transfer($headers, $request->all());
    return response($response);
});


Route::get('/transfer', function(Request $request, PaymentGateway $payment_gateway){
    $token = $request->header('Authorization');
    
    $headers = [
        'Authorization' => $token,
        'Content-Type' => 'application/json'
    ];

    $response = $payment_gateway->list($headers, $request->all());
    return response($response);
});