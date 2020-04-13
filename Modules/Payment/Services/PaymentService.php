<?php


use Buseet\Wunderland\Modules\Payment\Dto\CaptureMoney;
use Buseet\Wunderland\Modules\Payment\Dto\PayDto;
use Buseet\Wunderland\Modules\Payment\PaymentStrategyFactory;

class PaymentService
{
    /**
     * @var PaymentStrategyFactory
     */
    private $paymentStrategyFactory;

    /**
     * PaymentService constructor.
     * @param PaymentStrategyFactory $paymentStrategyFactory
     */
    public function __construct(PaymentStrategyFactory $paymentStrategyFactory)
    {
        $this->paymentStrategyFactory = $paymentStrategyFactory;
    }

    public function pay(PayDto $payDto) {
        $paymentStrategy = $this->paymentStrategyFactory->getInstance(true, false);
        $captureMoney = new CaptureMoney();
        return $paymentStrategy->capture($captureMoney);
    }
}