<?php

namespace Buseet\Wunderland\Modules\Payment;

use Buseet\Wunderland\Modules\Payment\Contracts\PaymentStrategyInterface;
use Buseet\Wunderland\Modules\Payment\Paymob\PaymobPaymentStrategy;

class PaymentStrategyFactory
{
    public function getInstance(bool $condition1, bool $condition2): PaymentStrategyInterface
    {
        if ($condition1) {
            return new PaymobPaymentStrategy();
        }

        return null;
    }
}