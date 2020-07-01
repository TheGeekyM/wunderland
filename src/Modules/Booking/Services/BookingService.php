<?php

namespace Buseet\Wunderland\Modules\Booking\Services;

use Buseet\Wunderland\Modules\Booking\Dto\BookingDto;
use Buseet\Wunderland\Modules\Booking\Dto\BookingResultsDto;
use Buseet\Wunderland\Modules\Booking\Mappers\BookingToPricingCalculationDto;
use Buseet\Wunderland\Modules\Booking\Mappers\PaymentResultsToBookingResultsDto;
use Buseet\Wunderland\Modules\Payment\Dto\PayDto;
use Buseet\Wunderland\Modules\Pricing\Services\PricingCalculationService;
use PaymentService;

/**
 * Class BookingService
 * @package Buseet\Wunderland\Modules\Booking\Services
 */
class BookingService
{
    /**
     * @var PricingCalculationService
     */
    private $pricingCalculationService;

    /**
     * @var PaymentService
     */
    private $paymentService;

    /**
     * BookingService constructor.
     * @param PricingCalculationService $pricingCalculationService
     * @param PaymentService $paymentService
     */
    public function __construct(PricingCalculationService $pricingCalculationService, PaymentService $paymentService)
    {
        $this->pricingCalculationService = $pricingCalculationService;
        $this->paymentService            = $paymentService;
    }

    public function createBookingIntent() {

    }

    /**
     * @param BookingDto $bookingDto
     * @return BookingResultsDto
     */
    public function book(BookingDto $bookingDto): BookingResultsDto
    {
        $pricingDto     = BookingToPricingCalculationDto::map($bookingDto);
        $pricingResults = $this->pricingCalculationService->calculate($pricingDto);

        $payDto         = new PayDto();
        $paymentResults = $this->paymentService->pay($payDto);

        return PaymentResultsToBookingResultsDto::map($paymentResults);
    }
}