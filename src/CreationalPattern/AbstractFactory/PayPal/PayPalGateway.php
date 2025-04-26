<?php

namespace Pc\Designpatterns\CreationalPattern\AbstractFactory\PayPal;
use Pc\Designpatterns\CreationalPattern\AbstractFactory\Contracts\PaymentGateway;
class PayPalGateway implements PaymentGateway
{
    public function charge(float $amount): void
    {
        // PayPal payment processing logic
        echo "Charging $amount using PayPal Gateway.\n";
    }
}
{

}