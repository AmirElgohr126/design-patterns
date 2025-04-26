<?php

namespace Pc\Designpatterns\CreationalPattern\AbstractFactory\Stripe;
use Pc\Designpatterns\CreationalPattern\AbstractFactory\Contracts\PaymentFactory;
use Pc\Designpatterns\CreationalPattern\AbstractFactory\Contracts\PaymentGateway;
use Pc\Designpatterns\CreationalPattern\AbstractFactory\Contracts\PaymentReceipt;
use Pc\Designpatterns\CreationalPattern\AbstractFactory\Contracts\PaymentValidator;

class StripePaymentFactory implements PaymentFactory
{

    public function createPaymentGateway(): PaymentGateway
    {
        return new StripeGateway();
    }

    public function createPaymentValidator(): PaymentValidator
    {
        return new StripeValidator();
    }

    public function createPaymentReceipt(): PaymentReceipt
    {
        return new StripeReceipt();
    }
}