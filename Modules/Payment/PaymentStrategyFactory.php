<?php


class PaymentStrategyFactory
{
    public function getInstance(bool $condition1, bool $condition2): PaymentStrategyInterface
    {
        if ($condition1) {
            return new PaymobPaymentStrategy();
        }

    }
}