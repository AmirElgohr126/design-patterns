<?php

namespace Pc\Designpatterns\CreationalPattern\AbstractFactory\Stripe;
use Pc\Designpatterns\CreationalPattern\AbstractFactory\Contracts\PaymentValidator;
class StripeValidator implements PaymentValidator
{
    private string $errorMessage;

    public function validate(array $data): bool
    {
        if ($data['amount'] <= 5) {
            $this->errorMessage = "Invalid amount. Amount must be greater than five.";
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