<?php

namespace Buseet\Wunderland\Modules\Booking\Mappers;

use Buseet\Wunderland\Modules\Booking\Dto\BookingResultsDto;
use Buseet\Wunderland\Modules\Payment\Dto\PayDto;

class PaymentResultsToBookingResultsDto
{
    public static function map(PayDto $payDto): BookingResultsDto {
        return new BookingResultsDto();
    }
}