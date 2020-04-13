<?php


interface PaymentStrategyInterface
{
    public function capture(CaptureMoney $captureMoney);

    public function refund(RefundMoney $refundMoney);
}