<?php

namespace Buseet\Wunderland\Mappers;

use Buseet\Wunderland\Modules\Booking\Dto\BookingResultsDto;
use Buseet\Wunderland\Responses\BookingResponse;

class BookingResponseMapper
{
    public static function map(BookingResultsDto $bookingResultsDto): BookingResponse
    {
        return new BookingResponse();
    }
}