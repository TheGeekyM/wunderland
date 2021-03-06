<?php

namespace Buseet\Wunderland\Requests;

use Buseet\Wunderland\Contracts\RequestInterface;
use Buseet\Wunderland\Mappers\BookingResponseMapper;
use Buseet\Wunderland\Modules\Booking\Dto\BookingDto;
use Buseet\Wunderland\Modules\Booking\Services\BookingService;
use Buseet\Wunderland\Responses\BookingResponse;

class BookingRequest implements RequestInterface
{

    /**
     * @var
     */
    private $seats;

    private $promos;

    /**
     * @var BookingService
     */
    private $bookingService;

    /**
     * BookingRequest constructor.
     * @param BookingService $bookingService
     */
    public function __construct(BookingService $bookingService)
    {
        $this->bookingService = $bookingService;
    }

    /**
     * Convert raw http request body/headers array to standard request object
     *
     * @param array $requestBody
     * @param array $headers
     * @return RequestInterface
     */
    public function hydrate(array $requestBody, array $headers): RequestInterface
    {
        // TODO: Implement hydrate() method.
        $this->seats = $requestBody['seats'] ?? [];
        return $this;
    }

    public function validate(): RequestInterface
    {
        // TODO: Implement validate() method.
        return $this;
    }

    /**
     * @return BookingResponse
     */
    public function fulfill(): BookingResponse
    {
        // TODO: Implement fulfill() method.
        $bookingDto = new BookingDto();
        $bookingResults = $this->bookingService->book($bookingDto);
        return BookingResponseMapper::map($bookingResults);
    }
}