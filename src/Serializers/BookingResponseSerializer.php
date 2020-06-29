<?php

namespace Buseet\Wunderland\Serializers;

use Buseet\Wunderland\Responses\BookingResponse;

class BookingResponseSerializer
{
    /**
     * @param BookingResponse $bookingResponse
     * @return array
     */
    public static function serialize(BookingResponse $bookingResponse): array
    {
        return [
          'paymentReference' => '',
        ];
    }
}