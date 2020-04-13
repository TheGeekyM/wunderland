<?php


class PaymentResultsToBookingResultsDto
{
    public static function map(PayDto $payDto): BookingResultsDto {
        return new BookingResultsDto();
    }
}