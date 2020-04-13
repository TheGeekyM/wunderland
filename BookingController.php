<?php


class BookingController
{
    public function __construct()
    {
    }

    public function handleBookingAction(BookingRequest $request)
    {
        $request->hydrate([])->validate();
        $bookingResults = $request->fulfill();

        return BookingResponseSerializer::serialize($bookingResults);
    }
}