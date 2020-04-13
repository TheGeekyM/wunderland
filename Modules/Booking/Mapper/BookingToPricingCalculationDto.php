<?php


class BookingToPricingCalculationDto
{
    public static function map(BookingDto $bookingDto): PricingCalculationDto {
        return new PricingCalculationDto();
    }
}