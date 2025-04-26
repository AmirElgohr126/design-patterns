<?php

namespace Pc\Designpatterns\CreationalPattern\AbstractFactory\App;

use Pc\Designpatterns\CreationalPattern\AbstractFactory\Contracts\PaymentFactory;

class OrderService
{
    public static function processOrder(PaymentFactory $factory ,float $amount ,array $data) : void
    {
        $gateway = $factory->createPaymentGateway();
        $validator = $factory->createPaymentValidator();
        $receipt = $factory->createPaymentReceipt();

        echo "📦 Starting order process...\n";
        if ($validator->validate($data)) {
            $gateway->charge($amount);
            echo $receipt->generateReceipt() . "\n";
        } else {
            echo "❌ Payment validation failed.\n";
        }

        echo "✅ Done.\n\n";
    }
}