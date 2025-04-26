<?php

namespace Pc\Designpatterns\CreationalPattern\AbstractFactory\Contracts;

interface PaymentFactory
{
    // انشاء بوابة الدفع
    public function createPaymentGateway(): PaymentGateway;

    // التحقق من الدفع
    public function createPaymentValidator(): PaymentValidator;

    // ايصال الدفع
    public function createPaymentReceipt(): PaymentReceipt;
}