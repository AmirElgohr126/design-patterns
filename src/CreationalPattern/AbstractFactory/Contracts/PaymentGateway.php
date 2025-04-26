<?php

namespace Pc\Designpatterns\CreationalPattern\AbstractFactory\Contracts;

interface PaymentGateway
{
    public function charge(float $amount): void;
}