<?php

namespace Pc\Designpatterns\CreationalPattern\AbstractFactory\Stripe;
use Pc\Designpatterns\CreationalPattern\AbstractFactory\Contracts\PaymentGateway;
class StripeGateway implements PaymentGateway
{
    public function charge(float $amount): void
    {
        // Stripe payment processing logic
        echo "Charging $amount using Stripe Gateway.\n";
    }
}
{

}