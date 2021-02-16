<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MakeTransferController extends Controller
{
    public $payment_gateway;
    
    public function __construct(PaymentGateway $payment_gateway)
    {
        $this->payment_gateway = $payment_gateway;
    }

    public function transfer(Request $request)
    {
        $response  = $this->payment_gateway->transfer([], $request->all());
        return response()->json($response);
    }


}
