<?php

namespace Buseet\Wunderland\Modules\Payment\Contracts;

use Buseet\Wunderland\Modules\Payment\Dto\CaptureMoney;
use Buseet\Wunderland\Modules\Payment\Dto\RefundMoney;

interface PaymentStrategyInterface
{
    public function capture(CaptureMoney $captureMoney);

    public function refund(RefundMoney $refundMoney);
}