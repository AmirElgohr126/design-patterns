<?php

namespace Pc\Designpatterns\CreationalPattern\AbstractFactory\Contracts;

interface PaymentValidator
{
    public function validate(array $data): bool;

    public function getErrorMessage(): string;
}