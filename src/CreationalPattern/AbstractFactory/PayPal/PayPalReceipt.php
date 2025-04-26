<?php

namespace Pc\Designpatterns\CreationalPattern\AbstractFactory\PayPal;

use Pc\Designpatterns\CreationalPattern\AbstractFactory\Contracts\PaymentReceipt;

class PayPalReceipt implements PaymentReceipt
{
    public function generateReceipt(): string
    {
        return "PayPal Receipt: Payment successful!";
    }
}