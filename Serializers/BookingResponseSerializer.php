<?php


class BookingResponseSerializer
{
    /**
     * @param BookingResponse $bookingResponse
     * @return array
     */
    public static function serialize(BookingResponse $bookingResponse)
    {
        return [
          'paymentReference' => '',
        ];
    }
}