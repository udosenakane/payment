<?php

namespace Payment\Payment\Contracts;


interface PaymentGateway
{
    /**
     * Make transfer/pay/init().
     *
     * @return json
     */
    public function transfer($headers = [], $params =[]);
}
