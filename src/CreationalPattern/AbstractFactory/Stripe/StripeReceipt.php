<?php

namespace Pc\Designpatterns\CreationalPattern\AbstractFactory\Stripe;

use Pc\Designpatterns\CreationalPattern\AbstractFactory\Contracts\PaymentReceipt;

class StripeReceipt implements PaymentReceipt
{
    public function generateReceipt(): string
    {
        return "Stripe Receipt: Payment successful!";
    }
}