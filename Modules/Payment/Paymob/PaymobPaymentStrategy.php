<?php

namespace Buseet\Wunderland\Modules\Payment\Paymob;

use Buseet\Wunderland\Modules\Payment\Contracts\PaymentStrategyInterface;
use Buseet\Wunderland\Modules\Payment\Dto\CaptureMoney;
use Buseet\Wunderland\Modules\Payment\Dto\RefundMoney;


class PaymobPaymentStrategy implements PaymentStrategyInterface
{

    public function capture(CaptureMoney $captureMoney)
    {
        // TODO: Implement capture() method.

    }

    public function refund(RefundMoney $refundMoney)
    {
        // TODO: Implement refund() method.
    }
}