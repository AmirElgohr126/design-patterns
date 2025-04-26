<?php

namespace Pc\Designpatterns\CreationalPattern\AbstractFactory\PayPal;
use Pc\Designpatterns\CreationalPattern\AbstractFactory\Contracts\PaymentFactory;
use Pc\Designpatterns\CreationalPattern\AbstractFactory\Contracts\PaymentGateway;
use Pc\Designpatterns\CreationalPattern\AbstractFactory\Contracts\PaymentReceipt;
use Pc\Designpatterns\CreationalPattern\AbstractFactory\Contracts\PaymentValidator;

class PayPalPaymentFactory implements PaymentFactory
{

    public function createPaymentGateway(): PaymentGateway
    {
        return new PayPalGateway();
    }

    public function createPaymentValidator(): PaymentValidator
    {
        return new PayPalValidator();
    }

    public function createPaymentReceipt(): PaymentReceipt
    {
        return new PayPalReceipt();
    }
}