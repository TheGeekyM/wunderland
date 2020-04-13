<?php


class BookingResponseMapper
{
    public static function map(BookingResultsDto $bookingResultsDto): BookingResponse
    {
        return new BookingResponse();
    }
}