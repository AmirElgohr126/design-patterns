<?php

namespace Pc\Designpatterns\CreationalPattern\AbstractFactory\PayPal;
use Pc\Designpatterns\CreationalPattern\AbstractFactory\Contracts\PaymentValidator;
class PayPalValidator implements PaymentValidator
{
    private string $errorMessage;

    public function validate(array $data): bool
    {
        if ($data['amount'] <= 10) {
            $this->errorMessage = "Invalid amount. Amount must be greater than ten.";
            return false;
        }
        return true;
    }

    public function getErrorMessage(): string
    {
        return $this->errorMessage;
    }
}
{

}