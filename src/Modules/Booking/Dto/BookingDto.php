<?php

namespace Buseet\Wunderland\Modules\Booking\Dto;

use Buseet\Wunderland\Modules\Orders\Models\Seat;

class BookingDto
{
    /**
     * @var string
     */
    private $paymentReference;

    /**
     * @var Seat[]
     */
    private $seats;

    /**
     * @var string[]
     */
    private $promos;

    /**
     * @return string
     */
    public function getPaymentReference(): string
    {
        return $this->paymentReference;
    }

    /**
     * @param string $paymentReference
     */
    public function setPaymentReference(string $paymentReference)
    {
        $this->paymentReference = $paymentReference;
    }

    /**
     * @return Seat[]
     */
    public function getSeats(): array
    {
        return $this->seats;
    }

    /**
     * @param Seat[] $seats
     */
    public function setSeats(array $seats)
    {
        $this->seats = $seats;
    }

    /**
     * @return string[]
     */
    public function getPromos(): array
    {
        return $this->promos;
    }

    /**
     * @param string[] $promos
     */
    public function setPromos(array $promos)
    {
        $this->promos = $promos;
    }
}