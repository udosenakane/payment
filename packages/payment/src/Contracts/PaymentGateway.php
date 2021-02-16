<?php

namespace Payment\Payment\Contracts;


interface PaymentGateway
{
    /**
     * Make transfer/pay/init().
     *
     * @return json
     */
    public function transfer($params =[]);


    /**
     * liist transfers history.
     *
     * @return array
     */
    public function list($params = []);
}
