<?php

namespace Pc\Designpatterns\CreationalPattern\AbstractFactory\Contracts;

interface PaymentReceipt
{
    public function generateReceipt(): string;
}