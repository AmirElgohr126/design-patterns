<?php

namespace Pc\Designpatterns\CreationalPattern\AbstractFactory;
use Pc\Designpatterns\CreationalPattern\AbstractFactory\App\OrderService;
use Pc\Designpatterns\CreationalPattern\AbstractFactory\Stripe\StripePaymentFactory;

require __DIR__ . '/../../../vendor/autoload.php';


$stripeFactory = new StripePaymentFactory();

OrderService::processOrder(
    $stripeFactory,
    100.00,
    ['amount' => 100.00, 'currency' => 'USD']
    );


