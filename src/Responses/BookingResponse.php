<?php

namespace Buseet\Wunderland\Responses;

class BookingResponse
{
    /**
     * @var string
     */
    private $bookingReference;

    /**
     * @return string
     */
    public function getBookingReference(): string
    {
        return $this->bookingReference;
    }

    /**
     * @param string $bookingReference
     */
    public function setBookingReference(string $bookingReference)
    {
        $this->bookingReference = $bookingReference;
    }
}