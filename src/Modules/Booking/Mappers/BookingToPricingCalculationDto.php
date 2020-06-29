<?php

namespace Buseet\Wunderland\Modules\Booking\Mappers;

use Buseet\Wunderland\Modules\Booking\Dto\BookingDto;
use Buseet\Wunderland\Modules\Pricing\Dto\PricingCalculationDto;

class BookingToPricingCalculationDto
{
    public static function map(BookingDto $bookingDto): PricingCalculationDto {
        return new PricingCalculationDto();
    }
}